<div class="container">
    <form class="form-signup" method="post">
        <img class="mb-4" src="" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <div class="form-group">
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus name="name">
        </div>
        <div class="class-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="login">
        </div>
        <div class="class-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        </div>

        <button class="btn btn-lg btn-success btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
</div>

<style>
    .container {
        margin-top: 150px;
        margin-bottom: 150px;
    }

    .form-signup {
        width: 100%;
        max-width: 630px;
        padding: 15px;
        margin: 0 auto;
    }


    .form-signup .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 15px;
        font-size: 16px;
    }

    .form-signup .form-control:focus {
        z-index: 2;
    }

    .form-signup input[type="text"] {
        margin-bottom: -5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-signup input[type="email"] {
        margin-bottom: 10px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signup input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    /*.class-group{*/
    /*margin-bottom: 10px;*/
    /*}*/
</style>