<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('cssFile/styles.min.css') }}">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;700&family=Inter:wght@400;700&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">

    <title>TMS</title>

    <meta name="title" content="TMS">

</head>

<body class=" dashboard ">
    <x-sidebar></x-sidebar>
    <div class="inner">

        <div class="project-block">
            <div class="text-block text-center">
                <h1>News Post</h1>
            </div>
            <div class="project-item ">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                        {{Session::get('message')}}
                        </div>
                        @endif
                        <div class="card p-3">
                            <form method="POST" action="{{ route('admin.edit.news.create') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="news_title" class="form-label">News Title</label>
                                    <input name="news_title" type="text" class="form-control" id="newstitle"
                                        placeholder="News Title">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">News Image</label>
                                    <input type="file" onchange="handleFileSelect(event)" >
                                    <input name="image" hidden class="form-control" type="text" id="image"
                                        value="">
                                    <img src="" class="image" alt="">
                                </div>

                                <div class="mb-3">
                                    <label for="news_discription" class="form-label">News Content</label>
                                    

                                    <textarea name="news_discription" class="form-control" id="newstext" rows="8"></textarea>
                                   
                                 
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-site">Post News</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</body>

</html>

<script>
    function handleFileSelect(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function(event) {
            const base64 = event.target.result;
            document.getElementById('image').value = base64;
            const img = document.querySelector('.image');
            img.src = base64;
        };

        reader.readAsDataURL(file);
    }
</script>

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
