<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./dist/styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <style>
      .login {
        background: url("./dist/images/login-new.jpeg");
      }
    </style>
    <title>Register</title>
  </head>
  <body class="h-screen font-sans login bg-cover">
    <div
      class="container mx-auto h-full flex flex-1 justify-center items-center"
    >
      <div class="w-full max-w-lg">
        <div class="leading-loose">
          <form
            class="max-w-xl m-4 p-10 bg-white rounded shadow-xl"
            method="post"
            action="/store_register"
          >
            @csrf @if($errors->any())
            <div class="alert alert-danger my-4">
              <ul>
                @foreach($errors->all() as $e)
                <li>{{$e}}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <p class="text-gray-800 font-medium">Register</p>
            <div class="">
              <label class="block text-sm text-gray-00" for="username"
                >Username</label
              >
              <input
                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                id="username"
                name="username"
                type="text"
                required
                value="{{old('username')}}"
                placeholder="Your Name"
                aria-label="Name"
              />
            </div>
            <div class="mt-2">
              <label class="block text-sm text-gray-00" for="password"
                >Password</label
              >
              <input
                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                id="password"
                name="password"
                type="password"
                placeholder="Password"
                aria-label="Email"
                required
              />
            </div>
            <div class="mt-2">
              <label class="block text-sm text-gray-00" for="password"
                >Konfirmasi Password</label
              >
              <input
                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                id="confirm"
                name="confirm"
                type="password"
                placeholder="Konfirmasi password"
                aria-label="Password"
                required
              />
            </div>
            <div class="mt-4">
              <button
                class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                type="submit"
              >
                Register
              </button>
            </div>
            <a
              class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800"
              href="/login"
            >
              Already have an account ?
            </a>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
