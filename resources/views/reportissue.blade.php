<x-layout>
        <x-slot:heading>
            Submit Issue
        </x-slot:heading>
        <h1>Report Community issue</h1><br>
@if(session('success'))
    <div id="success-alert" class="alert alert-success">
        <h1 style="color: green;">{{ session('success') }}</h1>
    </div>
@endif
    <script>
    // Wait until the DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            var alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s ease-out";
                alert.style.opacity = '0';

                // Then hide it completely after fading out
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 5000); // 3 seconds
    });
</script>
    <form action="{{ route('report.issue.submit') }}" method="POST">
        @csrf
        <label for="title">Issue Title</label> <br>
        <input type="text" name="title" id="title" placeholder='Enter Issue Title...' require><br>
        <br>

        <label for="description">Issue description</label><br>
        <textarea type="text" name="description" id="description" placeholder='Enter Description...' require></textarea></br>
        <br>

        <label for="location">Location</label><br>
        <input type="text" name="location" id="location" placeholder='Enter Location' require><br>
        <br>

        <label for="priority">Priority</label><br>
        <select name='priority' id='priority' class='size-15'>
              <option value="volvo">High</option>
              <option value="saab">Medium</option>
              <option value="mercedes">Low</option>
        </select><br>
        {{-- <input type="text" name="priority" id="priority" placeholder='Enter Priority'><br> --}}
        <br>
        <input type="file" id="myFile" name="filename">  <br>
        <br>   

        <button type="submit">Submit</button>
    </form>

</x-layout>
