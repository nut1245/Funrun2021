<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chiang Mai Marathon</title>
  <link rel="stylesheet" href="/card.css">
</head>

<body>

  <div class="card ">
    <h2>Chiang Mai Marathon</h2>
    <form action="/insertdb" method="POST" class="signin-form">
    <input type="hidden" class="form-control" id="category_run" name="category_run" value="2">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>ID Card</label>
            <input type="text" class="form-control" id="id_card" name="id_card" value="<?= set_value('id_card'); ?>">
          </div>
        </div>



        <div class="col">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" id="age" name="age" value="<?= set_value('age'); ?>">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
          </div>
        </div>

     


        <span></span>
        <div class="col">
          <button type="submit" onclick="ok()">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script>
function ok() {
  alert("ลงทะเบียนการแข่งขันสำเร็จ");
}
</script>
</body>


</html>