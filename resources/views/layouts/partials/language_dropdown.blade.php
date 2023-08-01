<style>
    .mx-1{
        width: 20px;
        height: 20px;
    }
    .n-flex{
        display: flex !important;
 
    }


</style>

        <ul class="sub-menu">

            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="n-flex items-center px-4 py-1 -mx-2">
                    <img class="h-5 w-5 rounded-full object-cover mx-1 invisible" src=""
                        alt="avatar">
                    <p class="text-dark text-sm mx-2">
                        عربي
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('nl') }}" class="n-flex items-center px-4 py-1 -mx-2">
                    <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/nl-flag.png') }}"
                        alt="avatar">
                    <p class="text-dark text-sm mx-2">
                        Deutsch
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('fr') }}" class="n-flex items-center px-4 py-1 -mx-2">
                    <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/fr-flag.png') }}"
                        alt="avatar">
                    <p class="text-dark text-sm mx-2">
                        français
                    </p>
                </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"class="n-flex items-center px-4 py-1 -mx-2">
                <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/en-flag.png') }}"
                    alt="avatar">
                <p class="text-dark text-sm mx-2">
                    English
                </p>
            </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}" class="n-flex items-center px-4 py-1 -mx-2">
                <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/tr-flag.png') }}"
                    alt="avatar">
                <p class="text-dark text-sm mx-2">
                    Turkce
                </p>
            </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('fa') }}"class="n-flex items-center px-4 py-1 -mx-2">
                <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/fa-flag.png') }}"
                    alt="avatar">
                <p class="text-dark text-sm mx-2">
                    فارسی
                </p>
            </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('ur') }}" class="n-flex items-center px-4 py-1 -mx-2">
                <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/ur-flag.png') }}"
                    alt="avatar">
                <p class="text-dark text-sm mx-2">
                    اردو
                </p>
            </a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('hi') }}"class="n-flex items-center px-4 py-1 -mx-2">
                <img class="h-5 w-5 rounded-full object-cover mx-1" src="{{ asset('images/hi-flag.png') }}"
                    alt="avatar">
                <p class="text-dark text-sm mx-2">
                    हिन्दी
                </p>
            </a>
            </li>
        
        </ul>

