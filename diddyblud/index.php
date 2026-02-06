
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-3">I have nothing but my sorrow… And I want nothing more. It has been, it still is, faithful to me.

Why should I begrudge it, since during the hours when my soul crushed the depths of my heart, it was seated there beside me?

O sorrow, I have ended, you see, by respecting you, because I am certain you will never leave me.

Ah, I realize it! Your beauty lies in the force of your being. You are like those who never left the sad fireside corner of my poor black heart.

O my sorrow, you are better than a well-beloved: because I know that on the day of my final agony, you will be there, lying in my sheets. O sorrow. So that you might once again attempt to enter my heart.</h3>

                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
