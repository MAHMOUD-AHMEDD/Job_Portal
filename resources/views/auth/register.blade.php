<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="{{asset('auth/RegisterStyle.css')}}">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form method="post" action="{{route('auth.register')}}">
          @csrf
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="name">
          </div>
          <!-- Input for Career Level -->
          <div class="input-box">
            <span class="details">Career Level</span>
{{--            <input type="text" placeholder="Enter your Career Level" required name="CareerLevel">--}}
              <select name="CareerLevel" >
                  <option value="internship">internship</option>
                  <option value="entry-level">entry-level</option>
                  <option value="junior">junior</option>
                  <option value="mid-senior">mid-senior</option>
                  <option value="senior">senior</option>
                  <option value="team-lead">team lead</option>
              </select>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="phone">
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="password">
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Your Role</span>
{{--            <input type="text" placeholder="Your Role" required>--}}
              <select name="role" id="role-selector">
                  <option value="job_seeker">Job Seeker</option>
                  <option value="employer">Employer</option>
              </select>
          </div>
        </div>
{{--                  @dd($companies)--}}
          <div class="input-box" id="employer-details">
              <span class="details">Select Your Company</span>
              <input list="company-list" placeholder="Type or select your company" name="company_name">
              <datalist id="company-list">
                  @foreach ($companies as $company)
                      <option value="{{ $company->company_name }}">
                  @endforeach
              </datalist>
          </div>
        <div class="gender-details">
          <!-- Radio buttons for gender selection -->
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <!-- Label for Male -->
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <!-- Label for Female -->
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <!-- Label for Prefer not to say -->
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

  <script>
      const roleSelector = document.getElementById('role-selector');
      const employerDetails = document.getElementById('employer-details');

      roleSelector.addEventListener('change', function() {
          if (this.value === 'employer') {
              employerDetails.classList.remove('hidden');
          } else {
              employerDetails.classList.add('hidden');
          }
      });
  </script>

</body>
</html>
