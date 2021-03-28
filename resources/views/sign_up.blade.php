@extends('partial.main')

@section('content')
    <div class="onboarding_div">
        <img src="{{ asset('app_assets/images/onboarding_background.png')}}" alt="onboarding_background" class="onboarding_image">
        <div class="onboarding_container">
            <img src="{{ asset('app_assets/images/logo.svg')}}" alt="logo" class="logo">
            <h1 class="onboarding_heading">Get Started with Ropay</h1>
            <form class="onboarding_form" action="{{ url('')}}" method="post">
                @csrf
                <div class="input_div onboarding_input_div">
                    <img src="{{ asset('app_assets/images/email_icon.svg')}}" alt="message_icon" class="input_icon_message">
                    <label>
                        <input type="email" placeholder="Email Address">
                    </label>
                </div>
                <div class="input_div onboarding_input_div">
                    <img src="{{ asset('app_assets/images/email_icon.svg')}}" alt="message_icon" class="input_icon_message">
                    <label>
                        <input type="password" placeholder="Password">
                    </label>
                </div>
                <div class="input_div onboarding_input_div">
                    <img src="{{ asset('app_assets/images/email_icon.svg')}}" alt="message_icon" class="input_icon_message">
                    <label>
                        <input type="password" placeholder="Password">
                    </label>
                </div>
                <div class="input_div onboarding_input_div">
                    <img src="{{ asset('app_assets/images/email_icon.svg')}}" alt="message_icon" class="input_icon_message">
                    <label>
                        <input type="password" placeholder="Password">
                    </label>
                </div>
                <div class="input_div onboarding_input_div">
                    <img src="{{ asset('app_assets/images/email_icon.svg')}}" alt="message_icon" class="input_icon_message">
                    <label>
                        <input type="password" placeholder="Password">
                    </label>
                </div>
                <button class="button_blue onboarding_button">
                    Get Started
                </button>
            </form>
            <hr class="onboarding_hr"/>
            <div class="google_image">
                <img src="{{ asset('app_assets/images/google_image.png')}}" alt="google-image">
            </div>
        </div>
    </div>
@endsection
