<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pendaftar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/DaftarPendaftar.css') }}">
</head>
<body>
<button class="mobile-nav-toggle d-lg-none" aria-label="Toggle navigation">
    <svg class="hamburger-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 12h18M3 6h18M3 18h18" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
          <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        </symbol>
</svg>
    
<main class="d-flex">
    <div class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-sidebar" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none mx-auto">
                <img src="img/logo.png" width="200px" alt="Logo" class="img-fluid">
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link active-custom">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                        Data Pendaftar
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Berita
                    </a>
                </li>
            </ul>
            <hr>
            <div class="sign-out text-center">
                <a href="" class="text-white text-decoration-none">Sign out</a>
            </div>
        </div>
    </div>

    <div class="b-example-divider b-example-vr"></div>

    <!-- Main Content -->
    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="page-title mb-0">Data Pendaftar</h2>
            <div class="search-wrapper">
                <svg class="search-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9584 43.75C34.889 43.75 43.7501 34.889 43.7501 23.9583C43.7501 13.0277 34.889 4.16667 23.9584 4.16667C13.0278 4.16667 4.16675 13.0277 4.16675 23.9583C4.16675 34.889 13.0278 43.75 23.9584 43.75Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M45.8334 45.8333L41.6667 41.6667" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
        </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>NO TELEPON</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>anan</td>
                        <td>anan@example.com</td>
                        <td>081234567890</td>
                        <td>
                        <div class="action-buttons-container">
                            <button class="action-button" title="View">
                                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5"/>
                                    <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="action-button" title="Delete">
                                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002"/>
                                    <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
    <td>2</td>
    <td>Rafly</td>
    <td>rafly@example.com</td>
    <td>081234567891</td>
    <td>
        <div class="action-buttons-container">
            <button class="action-button" title="View">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5"/>
                    <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="action-button" title="Delete">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002"/>
                    <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </td>
</tr>
                </tbody>
                <tr>
    <td>3</td>
    <td>Mirsad</td>
    <td>mirsad@example.com</td>
    <td>081234561234</td>
    <td>
        <div class="action-buttons-container">
            <button class="action-button" title="View">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5"/>
                    <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="action-button" title="Delete">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002"/>
                    <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </td>
</tr>
</tbody>
<tr>
    <td>4</td>
    <td>Jusniansyah</td>
    <td>jusniansya@example.com</td>
    <td>081234568989</td>
    <td>
        <div class="action-buttons-container">
            <button class="action-button" title="View">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5"/>
                    <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="action-button" title="Delete">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002"/>
                    <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </td>
</tr>
</tbody>
<tr>
    <td>5</td>
    <td>Suta</td>
    <td>suta@example.com</td>
    <td>081234566789</td>
    <td>
        <div class="action-buttons-container">
            <button class="action-button" title="View">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5"/>
                    <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="action-button" title="Delete">
                <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002"/>
                    <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </td>
</tr>
            </table>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
            document.querySelector('.bg-sidebar').style.left = 
                document.querySelector('.bg-sidebar').style.left === '0px' ? '-280px' : '0px';
        });
    </script>
</body>
</html>