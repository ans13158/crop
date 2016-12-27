<head>
    <link rel="stylesheet" type="text/css" href="css/form_style.css">
</head>
<form class="form-horizontal wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter Name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="subject">Subject:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject for the message">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="message">Message:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter your message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>