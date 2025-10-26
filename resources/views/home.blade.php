<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    {{-- {{$greetings}} to {{$siteName}} <br/> --}}
    <br/>

    {{-- @foreach ($jobs as $job)

        <p><strong>{{$job['description']}}</strong>{{$job['report']}} </p>

    @endforeach --}}
    <a href="/report-issue" style="color:green"><b>CivicFix</b></a> is your community-powered platform designed to make your neighborhood better, safer, and more responsive. 
    Whether it’s a pothole on your street, a broken streetlight, or garbage collection issues — CivicFix empowers every citizen to raise their voice and report problems in just a few clicks.
    Click <a href="/report-issue" style="color:green"><b>Submit Issue</b></a> to submit an issue.<br/>
    <br/>

    <strong>What Can Citizens Do on CivicFix?</strong>
    <br>
    Easily submit local issues such as:<br>
	•	Damaged roads or sidewalks<br>
	•	Streetlight outages<br>
	•	Water leakage or sewer problems<br>
	•	Garbage overflow<br>
	•	Park maintenance needs<br>
<br>
     <b>📍 Add Location Details </b><br>
    Mark the exact location of the issue so local authorities can find and fix it quickly.<br>
 <br>
     <b>📷 Upload Photos </b><br>
    Attach a photo of the issue to make the report clearer and more effective.<br>
    <br>
     <b>🔔 Get Confirmation </b><br>
    Receive a confirmation message after submitting your report — so you know your voice has been heard.<br>
    <br>
     <b>📊 Track Your Submissions (Coming Soon) </b><br>
    Soon you will be able to view the status of your submitted issues and see progress updates from the civic team.<br>

    </h1>
</x-layout>