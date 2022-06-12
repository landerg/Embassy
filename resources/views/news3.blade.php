@extends('layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@stop

@section('content')
<h1>Statement by President Joe Biden on Additional Security Assistance to Ukraine</h1>
    <div class="image">
        <img src="{{ asset('img/news/default-blog-seal.webp') }}" alt="">
    </div>
    <h2>Location: Ukraine</h2>
    <p>
        <b>Event:</b> The security situation throughout Ukraine continues to be violent and 
        unpredictable due to ongoing military attacks by Russia, with active fighting 
        in country and uncertain safety conditions. Avoid large gatherings and 
        organized events as they may serve as Russian military targets anywhere in 
        Ukraine, including its western regions. The U.S. Embassy urges U.S. citizens 
        in Ukraine to depart now using privately available ground transportation 
        options if it is safe to do so. See the latest travel advisories.
    </p>
    <ul>
        <li>If you hear a loud explosion or if sirens are activated, immediately seek cover.</li>
        <li>If in a home or a building, go to the lowest level of the structure with the fewest exterior walls, windows, and openings; close any doors and sit near an interior wall, away from any windows or openings.</li>
        <li>If you are outdoors, immediately seek cover in a hardened structure; if that is not possible, lie down and cover your head with your hands.</li>
        <li>Be aware that even if the incoming missile or drone is intercepted, falling debris represents a significant risk.</li>
        <li>After the attack, stay away from any debris, and monitor major news outlets for official guidance.</li>
    </ul>
    <p>
        The security situation throughout Ukraine is highly volatile, and conditions may deteriorate 
        without warning. U.S. citizens should remain vigilant and take appropriate steps to increase 
        their security awareness. Know the location of your closest shelter or protected space. 
        In the event of mortar and/or rocket fire, follow the instructions from local authorities and 
        seek shelter immediately. If you feel your current location is no longer safe, you should 
        carefully assess the potential risks involved in moving to a different location.
    </p>
    <p>
        <b>Actions to Take:</b>  Visit the <a class="text-link" target="_blank" href="https://ua.usembassy.gov/u-s-citizen-services/security-and-travel-information/">U.S. Embassy in Kyiv’s</a> 
        webpage to view the most recent safety and security alerts for U.S. citizens.
    </p>
    <ul>
        <li>Regularly monitor local and international news and social media news channels.</li>
        <li>Ensure travel documents are valid and easily accessible.</li>
        <li>Review your personal security plans and always have a contingency plan in place that does not rely on U.S. government assistance.</li>
        <li>Get a COVID vaccine to facilitate your travel. Enroll in the Department of State’s <a class="text-link" target="_blank" href="https://step.state.gov/step/">Smart Traveler Enrollment Program (STEP).</a> STEP enrollment gives you the latest security updates and makes it easier for the U.S. Embassy to contact you in an emergency.</li>
        <li>Regularly monitor the State Department’s website for current <a class="text-link"  target="_blank" href="https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/">Travel Advisories.</a> Read the <a class="text-link" target="_blank" href="https://travel.state.gov/content/travel/en/international-travel/International-Travel-Country-Information-Pages/Ukraine.html">Country Specific Information for Ukraine.</a> For additional information, refer to the <a class="text-link" target="_blank" href="https://travel.state.gov/content/travel/en/international-travel/before-you-go/travelers-checklist.html">“Traveler’s Checklist”</a> on the State Department’s website.</li>
        <li>Please see information on <a class="text-link" target="_blank" href="https://travel.state.gov/content/travel/en/international-travel/emergencies/what-state-dept-can-cant-do-crisis.html">What the Department of State Can and Can’t Do in a Crisis.</a></li>
    </ul>
    <p>
        <b>For Assistance:</b>
    </p>
    <ul>
        <li>Call 1-888-407-4747 (in the United States) or 1-202-501-4444 (from overseas); or ·
            Email <a class="text-link" href="KyivACS@state.gov.">KyivACS@state.gov</a>.</li>
    </ul>

@endsection