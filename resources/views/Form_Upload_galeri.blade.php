@extends('layouts.app')
@section('content')
    <html>

    <head>
        {{-- <style>
            input {
                display: none;
                border: 3px;
            }

            label {
                align-items: center;
                height: 350px;
                width: 750px;
                border-radius: 6px;
                border: 3px dashed #fff;
                /* background: red; */
            }

            label:hover {
                color: brown;
                border: 1px dashed white;
            }

            .center {
                align-content: center;
                align-items: center;
                display: flex;
                right: 100px;
                width: 30cm;
            }

            .form {
                align-items: center;
                z
            }

            body {
                background: #0CE9AF;
                display: flex;
                flex-direction: column;
                font-family: Lato;
                height: 100%;
                margin: auto;
                text-shadow: 0 0px 2px rgba(245, 245, 245, .25);
            }

            #container {
                box-shadow: 0 4px 8px rgba(0, 0, 0, .75);
                margin: auto;
                width: auto;
            }

            .box-input {
                text-align: center;
            }

            .box-input svg {
                width: 5rem;
                height: 5rem;
                vertical-align: middle;
                fill: currentColor;
            }

            form {
                color: #fff;
            }

            input[type="button"i],
            input[type="file"i]::-webkit-file-upload-button {
                display: none !important;
            }

            .box.has-advanced-upload {
                transition: all .15s ease-in-out, background-color .15s linear;
            }

            .box {
                font-size: 1.25rem;
                background-color: #999;
                padding: 5rem 8rem;
                width: 100%;
            }

            .js .box-file {
                width: .1px;
                height: .1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            .box-input label {
                margin: auto;
                text-overflow: ellipsis;
                white-space: nowrap;
                color: #fff;
                cursor: pointer;
                text-align: center;
                display: block;
                overflow: hidden;
            }

            .js .box-file+label * {
                pointer-events: none;
            }

            .js .box-file:focus+label {
                outline: 1px dotted #000;
                outline: -webkit-focus-ring-color auto 5px;
            }

            button {
                border-radius: 23px;
                background: #6990F2;
                border: none;
                box-shadow: 0 2px 4px rgba(0, 0, 0, .25);
                color: #fff;
                display: flex;
                font-size: 1.25rem;
                font-weight: 700;
                margin: auto;
                margin-top: 2.5rem;
                overflow: auto;
                padding: 1rem 5rem;
            }

            button:hover {
                box-shadow: 0 4px 12px rgba(0, 0, 0, .5);
            }

            button:active {
                box-shadow: none;
            }

            .box-uploading {
                font-style: italic;
            }

            .box-success {
                transition: appear-from-inside .25s ease-in-out;
            }

            .box__success {
                animation: appear-from-inside .25s ease-in-out;
            }

            @keyframes appear-from-inside {
                from {
                    transform: translateY(-50%) scale(0);
                }

                75% {
                    transform: translateY(-50%) scale(1.1);
                }

                to {
                    transform: translateY(-50%) scale(1);
                }
            }

            .box-restart {
                font-weight: 700;
            }

            input,
            textarea,
            select {
                border-radius: 0;
                border: none;
            }

            input {
                line-height: normal;
            }

            .box-dragndrop,
            .box-icon,
            .box-uploading,
            .box-success,
            .box-error {
                display: none;
            }

            .box.has-advanced-upload .box-dragndrop {
                display: inline;
            }

            strong {
                color: #FFB4B4;
            }

            section .row {
                margin-bottom: 10px;
                background: #999;
                list-style: none;
                padding: 15px 20px;
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            section .row i {
                color: #6990F2;
                font-size: 30px;
            }

            section .details span {
                font-size: 14px;
            }

            .progress-area .row .content {
                border-radius: 19px;
                width: 10%;
                margin-left: 10px;
            }

            .progress-area .details {
                display: flex;
                align-items: center;
                margin-bottom: 7px;
                justify-content: space-between;
            }

            .progress-area .content .progress-bar {
                height: 6px;
                width: 100%;
                margin-bottom: 4px;
                background: red;
                border-radius: 30px;
            }

            .content .progress-bar .progress {
                height: 100%;
                width: 0%;
                background: #6990F2;
                border-radius: inherit;
            }

            .uploaded-area {
                max-height: 232px;
                overflow-y: scroll;
            }

            .uploaded-area.onprogress {
                max-height: 150px;
            }

            .uploaded-area::-webkit-scrollbar {
                width: 0px;
            }

            .uploaded-area .row .content {
                display: flex;
                align-items: center;
            }

            .uploaded-area .row .details {
                display: flex;
                margin-left: 15px;
                flex-direction: column;
            }

            .uploaded-area .row .details .size {
                color: #404040;
                font-size: 11px;
            }

            .uploaded-area i.fa-check {
                font-size: 16px;
                font-family:
            }

            .svg {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 115px;
            }
        </style> --}}
    </head>
    
    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
    
    <body>

        {{-- <div id="container">
            <form method="post" enctype="multipart/form-data" novalidate="" class="box has-advanced-upload">
                <div class="box-input">
                    <svg x="0px" y="0px" viewBox="0 0 64 62" style="enable-background:new 0 0 64 62;"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                                stroke: #fff;
                                stroke-width: 2;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <g id="spa-launch">
                            <path class="st0"
                                d="M33,27.1h-8c0,0-2-6-2-12c0-8,6-14,6-14s6,6,6,14C35,21.1,33,27.1,33,27.1z" />
                            <line class="st0" x1="29" y1="17.1" x2="29" y2="27.1" />
                            <polyline class="st0" points="25,27.1 17,27.1 17,23.1 23.1,17.1 	" />
                            <polyline class="st0" points="33,27.1 41,27.1 41,23.1 34.9,17.1 	" />
                            <path class="st0" d="M18,41.2c0.5-5.7,5.2-10.1,11-10.1c5.1,0,9.3,3.4,10.6,8.1" />
                            <path class="st0" d="M48,41.1c-0.2-3.4-3.1-6-6.5-6c-1.2,0-2.4,0.3-3.3,0.9" />
                            <path class="st0" d="M42.3,47.1c0,0-1-4-6-4" />
                            <path class="st0" d="M26.3,43.1c-3-1-4,2-4,2s-3-2-5,0s-1,4-1,4" />
                            <path class="st0"
                                d="M9,46.1c-0.8-0.6-1.9-1-3-1c-2.8,0-5,2.2-5,5s2.2,5,5,5h46c2.8,0,5-2.2,5-5c0-5-4-9-9-9
                  c-0.9,0-1.8,0.1-2.6,0.4" />
                            <path class="st0" d="M18.8,37.9c-1.1-0.5-2.4-0.8-3.8-0.8c-4.6,0-8.5,3.5-8.9,8" />
                        </g>
                    </svg>
                    <input type="file" name="files[]" id="file" class="box-file"
                        data-multiple-caption="{count} files selected" multiple="">
                    <label for="file">
                        <a>Upload Gambar</a>
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cloud-upload" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" />
                            </svg>
                        </div>
                    </label>
                    <br>
                    <section class="progress-area"></section>
                    <section class="uploaded-area"></section>
                    <button type="submit" class="button">Upload</button>

                </div>
            </form>
        </div>
        <script>
            const form = document.querySelector("form"),
                fileInput = document.querySelector(".box-file"),
                progressArea = document.querySelector(".progress-area"),
                uploadedArea = document.querySelector(".uploaded-area");
            form.addEventListener("click", () => {
                fileInput.click();
            });
            fileInput.onchange = ({
                target
            }) => {
                let file = target.files[0];
                if (file) {
                    let fileName = file.name;
                    if (fileName.length >= 12) {
                        let splitName = fileName.split('.');
                        fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
                    }
                    uploadFile(fileName);
                }
            }

            function uploadFile(name) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "php/upload.php");
                xhr.upload.addEventListener("progress", ({
                    loaded,
                    total
                }) => {
                    let fileLoaded = Math.floor((loaded / total) * 100);
                    let fileTotal = Math.floor(total / 1000);
                    let fileSize;
                    (fileTotal < 1024) ? fileSize = fileTotal + " KB": fileSize = (loaded / (1024 * 1024)).toFixed(2) +
                        " MB";
                    let progressHTML = `<li class="row">
                                      <div class="content">
                                        <div class="details">
                                          <span class="name">${name} • Uploading</span>
                                          <span class="percent">${fileLoaded}%</span>
                                        </div>
                                        <div class="progress-bar">
                                          <div class="progress" style="width: ${fileLoaded}%"></div>
                                        </div>
                                      </div>
                                    </li>`;
                    uploadedArea.classList.add("onprogress");
                    progressArea.innerHTML = progressHTML;
                    if (loaded == total) {
                        progressArea.innerHTML = "";
                        let uploadedHTML = `<li class="row">
                                        <div class="content upload">
                                          <div class="details">
                                            <span class="name">${name} • Uploaded</span>
                                            <span class="size">${fileSize}</span>
                                          </div>
                                        </div>
                                        <a href="">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                        <i class="fas fa-check"></i>
                                      </li>`;
                        uploadedArea.classList.remove("onprogress");
                        uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
                    }
                });
                let data = new FormData(form);
                xhr.send(data);
            }
        </script> --}}

        <img src="{{asset('photo/Premium.jpg')}}" alt="premium" class="center">

    </body>
@endsection
