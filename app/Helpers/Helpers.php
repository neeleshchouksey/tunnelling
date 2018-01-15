<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\Page;
use App\Partner;
use App\Keyreader;
use App\Advertiser;
use App\Companyinfo;
use App\Slidertype;
use App\Advertise;
use App\Contact;
use App\Subscribe;
use DB;
use App\SeoTags;
use Tracker;
class Helpers
{
    public static function pages()
    {
        return $pages = Page::all();
    }

    public static function partner()
    {
        return $partner = Partner::all();
    }
    public static function keyreader()
    {
        return $keyreader = Keyreader::all();
    }
    public static function advertiser()
    {
        return $advertiser = Advertiser::all();
    }
    public static function companyinfo()
    {
        return $companyinfo = Companyinfo::first();
    }
    public static function slidertype()
    {
        return $slidertype = Slidertype::all();
    }
    public static function advertise()
    {
        return $advertise = Advertise::all();
    }
   
    public static function contact()
    {
        return $contact = Contact::all();
    }
    public static function subscriptions()
    {
        return $subscribe = Subscribe::all();
    }
    public static function uniqueVisitors(){

        return DB::table('tracker_sessions')->distinct('client_ip')->count('client_ip'); 
    }
    public static function allVisitors(){

        return DB::table('tracker_sessions')->count('client_ip'); 
    }
    public static function SeoCommontags(){
        return SeoTags::where('slug','home')->first();
    }
    /**
     * Gets the sites urls.
     *
     * @param      string  $text   The text
     *
     * @return     string  The sites urls.
     */
    public static function getSitesUrls($text='',$pageName=''){
        $subject    =   array('FPRS 2018 enquiry – MK','FPST 2018 enquiry – MK');
        /**
         * Assign  Regualar expression to reg_exUrl
         * varriable  for url's pattern check 
         *
         * @var        string
         */
        $reg_exUrl  = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

        /**
         * Assign Regular expression to reg_exMail  
         * variable  for email pattern check
         *
         * @var        string
         */
        $reg_exMail = "/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i";

  
        /**
         * Check if there is a url in the text
         * and get all urls from text
         */
        if(preg_match_all($reg_exUrl, $text, $url)) {

                /**
                 * use foreach loop to get all
                 * url one by one
                 */
                foreach ($url[0] as $key => $value) {

                   /**
                    * Make Links of current url
                    *
                    * @var        string
                    */
                    $urlWithLink        =    "<a target='_blank' href='".$value."'>$value</a>";

                    /**
                     * Replace Url with link in text
                     *
                     * @var        <type>
                     */
                    $text               =    Self::str_replace_first($value, $urlWithLink, $text);
                
                }

        } 
         /**
         * Check if there is a emails in the text
         * and get all emails from text
         */
        if(preg_match_all($reg_exMail, $text, $emails)) {

            /**
             * use foreach loop to get all
             * email one by ond
             */
            $i =0;
            foreach ($emails[0] as $key => $value) {
                               
                /**
                * Make Links of current email
                *
                * @var        string
                */
                if($pageName=='media-partner' && $i<2):

                    
                    $urlWithLink        =    "<a href='mailto:".$value."?subject=".$subject[$i]."'>$value</a>";
                

                else:
                     $urlWithLink        =    "<a href='mailto:".$value."'>$value</a>";
                 endif;
                

                /**
                 * Replace Email with link in text
                 *
                 * @var        <type>
                 */
                $text               =    Self::str_replace_first($value, $urlWithLink, $text);
                $i++;
            }

        } 
        return $text;
    }
    /**
     * get $from,$to,$subject varible
     * $from = word to be searched
     * $to   = word to be replaced
     * $subject = string which have $from word
     *  
     *
     * @param      string  $from     The from
     * @param      <type>  $to       { parameter_description }
     * @param      <type>  $subject  The subject
     *
     * @return     <type>  return string after repalce word in string
     */
    public static function str_replace_first($from, $to, $subject)
    {
        $from = '/'.preg_quote($from, '/').'/';

        return preg_replace($from, $to, $subject, 1);
    }

  
}