@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="danger_alert">
        <br>        
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
        <br>
    </div>
    <br>
@endif
