<?php 
include('../layouts/head.php');
?>

<?php 
include('../layouts/navbar.php');
?>

<div class="container">
    <h1>Hello, world!</h1>

    <form class="mt-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="card mt-5">
        <div class="card-header">
            <h5>Card</h5>
        </div>
        <div class="card-body">
            <form action="/controller/index.php" action="POST">
                <div class="mb-3">
                    <label for="input1" class="form-label">Input 1</label>
                    <input type="text" class="form-control" id="input1" class="input1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="input2" class="form-label">Input 2</label>
                    <input type="text" class="form-control" id="input2" name="input2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</div>



    
<?php 
include('../layouts/foot.php');
?>