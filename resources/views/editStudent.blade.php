<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
 
</head>

<body>
<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Edit Student</div>
          </div>
          <form action="/student/update/{{$student->id}}" method='POST' id='form'>
      @csrf
            <div class="form-floating mb-3">
              <input class="form-control" id="level" type="text" placeholder="Full Name" name="fname" value="{{$student -> fname}}"/>
              <label for="name">Full Name</label>
            </div>


            <div class="form-floating mb-3">
              <input class="form-control" id="level" type="text" placeholder="Level" name="level" value="{{$student -> level}}"/>
              <label for="level">Level</label>
            </div>

       
            <div class="form-floating mb-3">
              <input class="form-control" id="programName" type="text" placeholder="Program" name="programName" value="{{$student -> programName}}"/>
              <label for="programName">Program</label>
             </div>

             <div class="form-floating mb-3">
              <input class="form-control" id="sem" type="text" placeholder="Semester" name="sem" value="{{$student -> sem}}"/>
              <label for="sem">Semester</label>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="contact" type="tel" placeholder="Contact" name="contact" value="{{$student -> contact}}"/>
              <label for="contact">Contact No.</label>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="address" type="text" placeholder="Address" name="address" value="{{$student -> address}}"/>
              <label for="address">Address</label>
            </div>

           
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
          </form>
        

        </div>
      </div>
    </div>
  </div>
</div>  

</body>
</html>