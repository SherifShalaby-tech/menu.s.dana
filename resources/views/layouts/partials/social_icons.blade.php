

<li><a target="_blank" href="{{ App\Models\System::getProperty('facebook') }}"><i class="fa fa-facebook"></i></a></li>
<li><a target="_blank" href="{{ App\Models\System::getProperty('twitter') }}"><i class="fa fa-twitter"></i></a></li>
<li><a target="_blank" href="{{ App\Models\System::getProperty('youtube') }}"><i class="fa fa-youtube"></i></a></li>
<li><a target="_blank" href="https://t.me/{{ App\Models\System::getProperty('telegram') }}"><i class="fa fa-telegram"></i></a></li>
<li><a target="_blank" href="{{ App\Models\System::getProperty('instagram') }}"><i class="fa fa-instagram"></i></a></li>
<li><a target="_blank" href="https://api.whatsapp.com/send?phone={{ App\Models\System::getProperty('whatsapp') }}"><i class="fa fa-whatsapp"></i></a></li>