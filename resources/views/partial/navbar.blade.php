<!--navbar utama-->
<link rel="stylesheet" href="css.css">
<div class="navbar">
    <h1><a href="/show" class="logo">Simple Siakad</a></h1>
    <label for="toggler"></label>
    <div class="col-sm-12" id="my_styles">
        <ul class="list">
            <li>
                <a href="/show">
                    <button class="button">Data Mahasiswa</button>
                </a>
            </li>
            <li>
                <a href="/create">
                    <button class="button">Input Data</button>
                </a>
            </li>
            <li>
                <a href="/about">
                    <button class="button">About Me</button>
                </a>
            </li>
        </ul>
    </div>
</div>
@yield('body')

