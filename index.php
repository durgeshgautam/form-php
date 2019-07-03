<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="css/animate.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    body
    {
      background-image: url('gray.jpg');
    }
    #th
    {
      background: transparent;
      box-shadow: -5px 3px 54px 17px rgba(0,0,0,0.75);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-sm-5 col-sm-push-3">
      <div class="thumbnail" id="th">
        <form action="regi.php" method="post">
          <div class="page-header">
            <h2>Registration Form</h2>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control">
          </div>
          <div class="form-group">
            <label for="name">Father Name</label>
            <input type="text" name="fathername" placeholder="Enter father name" class="form-control">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea  class="form-control" rows="3" name="address"></textarea>
          </div>
          <div class="form-group">
            <label for="gender">Gender:</label>&nbsp;
            <input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;
            <input type="radio" name="gender" value="Female" >Female
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <select name="country" class="form-control">
              <option value="India">India</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="American Samoa">American Samoa</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antarctica">Antarctica</option>
              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belarus">Belarus</option>
              <option value="Belgium">Belgium</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Bermuda">Bermuda</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bonaire">Bonaire</option>
              <option value="Bosnia">Bosnia</option>
            </select>
          </div>
          <div class="form-group">
              <label class="control-label" for="email">
                Email
              </label>
              <div class="input-group">
                  <div class="input-group-addon">
                   @
                  </div>
                <input class="form-control" id="email" name="email" type="text" autocomplete="off">
              </div>
          </div>
         <div class="form-group">
            <label for="phone no.">Phone no.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  +91
                  </div>
                <input type="input-control" type="text" name="phone" class="form-control">
              </div>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="cancel" class="btn btn-success">Cancel</button>

        </form>
      </div>
    </div>
  </div>
 

  </form>
</body>