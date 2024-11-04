<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Jekyll v3.8.5">
    <title>BBQ | official</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/Window.css"> <!-- link กับไฟล์อื่นๆ -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="site-header sticky-top py-1 blackbar">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <img src="logo2.png" width="70" height="21" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></img>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="Home.html">หน้าหลัก(Homepage)</a>
        <a class="py-2 d-none d-md-inline-block" href="Job.html">งาน(Job)</a>
        <a class="py-2 d-none d-md-inline-block" href="Worker.html">ลูกจ้าง(worker)</a>
        <a class="py-2 d-none d-md-inline-block" href="Report.html">รายงาน(Report)</a>        
      </div>
    </nav>

  <!-- ข้างในกล่องข้อความ -->
  <div class="head1">
    <form action="php/mySqlin.php">
    <div class="form-group row">
    <label class="col-4 col-form-label" for="Fname">ชื่อจริง(First Name)</label> 
    <div class="col-8">
      <input id="Fname" name="Fname" type="text" required="required" class="form-control">
    </div>
    </div>

    <div class="form-group row">
    <label for="Lname" class="col-4 col-form-label">นามสกุล(Last Name)</label> 
    <div class="col-8">
      <input id="Lname" name="Lname" type="text" class="form-control" required="required">
    </div>
    </div>

    <div class="form-group row">
    <label for="Nname" class="col-4 col-form-label">ชื่อเล่น(Nickname)</label> 
    <div class="col-8">
      <input id="Nname" name="Nname" type="text" class="form-control" required="required">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-4">เพศ(Gender)</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_0" type="radio" required="required" class="custom-control-input" value="Male"> 
        <label for="Gender_0" class="custom-control-label">ชาย(Male)</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_1" type="radio" required="required" class="custom-control-input" value="Female"> 
        <label for="Gender_1" class="custom-control-label">หญิง(Female)</label>
      </div>
    </div>
    </div>

    <div class="form-group row">
    <label for="relig" class="col-4 col-form-label">ศาสนา(religion)</label> 
    <div class="col-8">
      <input id="relig" name="relig" type="text" class="form-control">
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 mb-3">
      <label for="day">วัน(day)</label>
      <select class="custom-select d-block w-25" id="day" name="day" required="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19 ">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
        </select>
    </div>

    <div class="col-md-3 mb-5">
      <label for="month">เดือน(month)</label>
      <select class="custom-select d-block w-100" id="month" name="month"  required="">
              <option value="1">มกราคม (January)</option>
              <option value="2">กุมภาพันธ์ (February)</option>
              <option value="3">มีนาคม (March)</option>
              <option value="4">เมษายน (April)</option>
              <option value="5">พฤษภาคม (May)</option>
              <option value="6">มิถุนายน (June)</option>
              <option value="7">กรกฎาคม (July)</option>
              <option value="8">สิงหาคม (August)</option>
              <option value="9">กันยายน (September)</option>
              <option value="10">ตุลาคม (October)</option>
              <option value="11">พฤศจิกายน (November)</option>
              <option value="12">ธันวาคม (December)</option>
      </select>
    </div>

    <div class="col-md-3 mb-3">
      <label  for="years">ปีเกิด(birth year)</label>
      <input type="text" class="form-control" id="years" name="years" placeholder="" required="">
    </div>
    </div>
    <div class="form-group row">
      <label for="loca" class="col-4 col-form-label">ที่อยู่(address)</label> 
      <div class="col-8">
        <textarea id="loca" name="loca" cols="40" rows="4" class="form-control" required="required"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="number" class="col-4 col-form-label">เบอร์โทร(PhoneNumber)</label> 
      <div class="col-8">
        <input id="number" name="number" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="emaill" class="col-4 col-form-label">อีเมล(Email)</label> 
      <div class="col-8">
        <input id="emaill" name="emaill" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="skill" class="col-4 col-form-label">ทักษะ(Skill)</label> 
      <div class="col-8">
        <textarea id="skill" name="skill" cols="40" rows="5" class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="exp" class="col-4 col-form-label">ประสบการณ์ทำงาน(experience)</label> 
      <div class="col-8">
        <textarea id="exp" name="exp" cols="40" rows="5" class="form-control"></textarea>
      </div>
    </div>
    
    
    <div class="form-group row">
      <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">ส่งฟอร์ม </button>
    </div></div>
  </form></div>

</body>
</html>