<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>

        <div class="digital-clock">00:00:00</div>
    </h1>

    <button class="btn btn-primary" id="tombol">GET</button>
    <button class="btn btn-primary" id="status">
        </button>
</body>
<script>
$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

    var h = addZero(twelveHour(date.getHours()));
    var m = addZero(date.getMinutes());
    var s = addZero(date.getSeconds());
    var ms = date.getMilliseconds();
  $('.digital-clock').text(h + ':' + m + ':' + s +'.'+ms)
}


$(document).ready(function() {
  status();
  setInterval(status, 100);
})

function status() {
 $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/operator/status?id=1',
    success: function (data) {
        $("#status").html(data.status)
    },
    error: function() { 
         console.log(data);
    }
});
}

/* $(document).ready(function() {
  status();
  setInterval(update, 1);
})

function update() {
 $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/operator/update?id=1',
    success: function (data) {
        $("#status").html(data.status)
    },
    error: function() { 
         console.log(data);
    }
});
} */


$( "#tombol" ).click(function() {
    
  
});

</script>
</html>