<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/calculate.css?v={{ Config::get('app.media_files_version') }}">
    <script src="/js/calculate.js"></script>
</head>
<body>

<div class="main">
    <div class="container">
        <div class="calc__main__card">
{{--            <span>Sapa</span>--}}
{{--            <span class="calc__number">sads</span>--}}
            <table>
                <tr>
                    <td class="calc__history" colspan="4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 20px; height: 20px">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C201.7 512 151.2 495 109.7 466.1C95.2 455.1 91.64 436 101.8 421.5C111.9 407 131.8 403.5 146.3 413.6C177.4 435.3 215.2 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64C202.1 64 155 85.46 120.2 120.2L151 151C166.1 166.1 155.4 192 134.1 192H24C10.75 192 0 181.3 0 168V57.94C0 36.56 25.85 25.85 40.97 40.97L74.98 74.98C121.3 28.69 185.3 0 255.1 0L256 0zM256 128C269.3 128 280 138.7 280 152V246.1L344.1 311C354.3 320.4 354.3 335.6 344.1 344.1C335.6 354.3 320.4 354.3 311 344.1L239 272.1C234.5 268.5 232 262.4 232 256V152C232 138.7 242.7 128 256 128V128z"/>
                        </svg>
                    </td>
                </tr>
                <tr>
                    <td class="calc__text js__calc_ans" colspan="4" style="">0</td>
                </tr>

                <tr>
{{--                    <td class="js__calc__percent">&#37;</td>--}}
                    <td colspan="2" class="js__calc_c">C</td>
                    <td class="js__calc_ce">CE</td>
                    <td class="js__calc__plus__minus">&#43;&#8725;&#8722;</td>
                </tr>
                <tr>
                    <td class="js__calc__one__div">1/x</td>
                    <td class="js__calc__deg">x &#178;</td>
                    <td class="js__calc__root">&#8730;</td>
                    <td class="js__calc__div">&#247;</td>
                </tr>
                <tr>
                    <td class="js__calc__num" data-num="7">7</td>
                    <td class="js__calc__num" data-num="8">8</td>
                    <td class="js__calc__num" data-num="9">9</td>
                    <td class="js__calc__mul">&#215;</td>
                </tr>
                <tr>
                    <td class="js__calc__num" data-num="4">4</td>
                    <td class="js__calc__num" data-num="5">5</td>
                    <td class="js__calc__num" data-num="6">6</td>
                    <td class="js__calc__sub">-</td>
                </tr>
                <tr>
                    <td class="js__calc__num" data-num="1">1</td>
                    <td class="js__calc__num" data-num="2">2</td>
                    <td class="js__calc__num" data-num="3">3</td>
                    <td class="js__calc__add">+</td>
                </tr>
                <tr>
                    <td colspan="2" class="js__calc__num" data-num="0">0</td>
                    <td class="js__calc__comma">,</td>
                    <td class="js__calc__equal">=</td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</html>
