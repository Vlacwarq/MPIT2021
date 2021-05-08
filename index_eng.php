
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script type="text/javascript">
   $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<!-- Классы для интерактивных таблиц -->
    <style type="text/css">
        table.dataTable
{
    border-collapse: separate;
    border-spacing: 0;
    clear: both;
    margin: 0 auto;
    width: 100%;
}
table.dataTable thead th,table.dataTable tfoot th
{
    font-weight: bold;
}
table.dataTable thead th,table.dataTable thead td
{
    border-bottom: 1px solid #111;
    padding: 10px 18px;
}
table.dataTable thead th:active,table.dataTable thead td:active
{
    outline: none;
}
table.dataTable tfoot th,table.dataTable tfoot td
{
    border-top: 1px solid #111;
    padding: 10px 18px 6px 18px;
}
table.dataTable thead .sorting,table.dataTable thead .sorting_asc,table.dataTable thead .sorting_desc,table.dataTable thead .sorting_asc_disabled,table.dataTable thead .sorting_desc_disabled
{
    background-position: center right;
    background-repeat: no-repeat;
    cursor: hand;
    cursor: pointer;
}
table.dataTable thead .sorting
{
    background-image: url("../images/sort_both.png");
}
table.dataTable thead .sorting_asc
{
    background-image: url("../images/sort_asc.png") !important;
}
table.dataTable thead .sorting_desc
{
    background-image: url("../images/sort_desc.png") !important;
}
table.dataTable thead .sorting_asc_disabled
{
    background-image: url("../images/sort_asc_disabled.png");
}
table.dataTable thead .sorting_desc_disabled
{
    background-image: url("../images/sort_desc_disabled.png");
}
table.dataTable tbody tr
{
    background-color: #fff;
}
table.dataTable tbody tr.selected
{
    background-color: #b0bed9;
}
table.dataTable tbody th,table.dataTable tbody td
{
    padding: 8px 10px;
}
table.dataTable.row-border tbody th,table.dataTable.row-border tbody td,table.dataTable.display tbody th,table.dataTable.display tbody td
{
    border-top: 1px solid #ddd;
}
table.dataTable.row-border tbody tr:first-child th,table.dataTable.row-border tbody tr:first-child td,table.dataTable.display tbody tr:first-child th,table.dataTable.display tbody tr:first-child td
{
    border-top: none;
}
table.dataTable.cell-border tbody th,table.dataTable.cell-border tbody td
{
    border-right: 1px solid #ddd;
    border-top: 1px solid #ddd;
}
table.dataTable.cell-border tbody tr th:first-child,table.dataTable.cell-border tbody tr td:first-child
{
    border-left: 1px solid #ddd;
}
table.dataTable.cell-border tbody tr:first-child th,table.dataTable.cell-border tbody tr:first-child td
{
    border-top: none;
}
table.dataTable.stripe tbody tr.odd,table.dataTable.display tbody tr.odd
{
    background-color: #f9f9f9;
}
table.dataTable.stripe tbody tr.odd.selected,table.dataTable.display tbody tr.odd.selected
{
    background-color: #acbad4;
}
table.dataTable.hover tbody tr:hover,table.dataTable.display tbody tr:hover
{
    background-color: #f6f6f6;
}
table.dataTable.hover tbody tr:hover.selected,table.dataTable.display tbody tr:hover.selected
{
    background-color: #aab7d1;
}
table.dataTable.order-column tbody tr>.sorting_1,table.dataTable.order-column tbody tr>.sorting_2,table.dataTable.order-column tbody tr>.sorting_3,table.dataTable.display tbody tr>.sorting_1,table.dataTable.display tbody tr>.sorting_2,table.dataTable.display tbody tr>.sorting_3
{
    background-color: #fafafa;
}
table.dataTable.order-column tbody tr.selected>.sorting_1,table.dataTable.order-column tbody tr.selected>.sorting_2,table.dataTable.order-column tbody tr.selected>.sorting_3,table.dataTable.display tbody tr.selected>.sorting_1,table.dataTable.display tbody tr.selected>.sorting_2,table.dataTable.display tbody tr.selected>.sorting_3
{
    background-color: #acbad5;
}
table.dataTable.display tbody tr.odd>.sorting_1,table.dataTable.order-column.stripe tbody tr.odd>.sorting_1
{
    background-color: #f1f1f1;
}
table.dataTable.display tbody tr.odd>.sorting_2,table.dataTable.order-column.stripe tbody tr.odd>.sorting_2
{
    background-color: #f3f3f3;
}
table.dataTable.display tbody tr.odd>.sorting_3,table.dataTable.order-column.stripe tbody tr.odd>.sorting_3
{
    background-color: whitesmoke;
}
table.dataTable.display tbody tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_1
{
    background-color: #a6b4cd;
}
table.dataTable.display tbody tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_2
{
    background-color: #a8b5cf;
}
table.dataTable.display tbody tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_3
{
    background-color: #a9b7d1;
}
table.dataTable.display tbody tr.even>.sorting_1,table.dataTable.order-column.stripe tbody tr.even>.sorting_1
{
    background-color: #fafafa;
}
table.dataTable.display tbody tr.even>.sorting_2,table.dataTable.order-column.stripe tbody tr.even>.sorting_2
{
    background-color: #fcfcfc;
}
table.dataTable.display tbody tr.even>.sorting_3,table.dataTable.order-column.stripe tbody tr.even>.sorting_3
{
    background-color: #fefefe;
}
table.dataTable.display tbody tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_1
{
    background-color: #acbad5;
}
table.dataTable.display tbody tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_2
{
    background-color: #aebcd6;
}
table.dataTable.display tbody tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_3
{
    background-color: #afbdd8;
}
table.dataTable.display tbody tr:hover>.sorting_1,table.dataTable.order-column.hover tbody tr:hover>.sorting_1
{
    background-color: #eaeaea;
}
table.dataTable.display tbody tr:hover>.sorting_2,table.dataTable.order-column.hover tbody tr:hover>.sorting_2
{
    background-color: #ececec;
}
table.dataTable.display tbody tr:hover>.sorting_3,table.dataTable.order-column.hover tbody tr:hover>.sorting_3
{
    background-color: #efefef;
}
table.dataTable.display tbody tr:hover.selected>.sorting_1,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1
{
    background-color: #a2aec7;
}
table.dataTable.display tbody tr:hover.selected>.sorting_2,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2
{
    background-color: #a3b0c9;
}
table.dataTable.display tbody tr:hover.selected>.sorting_3,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3
{
    background-color: #a5b2cb;
}
table.dataTable.no-footer
{
    border-bottom: 1px solid #111;
}
table.dataTable.nowrap th,table.dataTable.nowrap td
{
    white-space: nowrap;
}
table.dataTable.compact thead th,table.dataTable.compact thead td
{
    padding: 4px 17px;
}
table.dataTable.compact tfoot th,table.dataTable.compact tfoot td
{
    padding: 4px;
}
table.dataTable.compact tbody th,table.dataTable.compact tbody td
{
    padding: 4px;
}
table.dataTable th.dt-left,table.dataTable td.dt-left
{
    text-align: left;
}
table.dataTable th.dt-center,table.dataTable td.dt-center,table.dataTable td.dataTables_empty
{
    text-align: center;
}
table.dataTable th.dt-right,table.dataTable td.dt-right
{
    text-align: right;
}
table.dataTable th.dt-justify,table.dataTable td.dt-justify
{
    text-align: justify;
}
table.dataTable th.dt-nowrap,table.dataTable td.dt-nowrap
{
    white-space: nowrap;
}
table.dataTable thead th.dt-head-left,table.dataTable thead td.dt-head-left,table.dataTable tfoot th.dt-head-left,table.dataTable tfoot td.dt-head-left
{
    text-align: left;
}
table.dataTable thead th.dt-head-center,table.dataTable thead td.dt-head-center,table.dataTable tfoot th.dt-head-center,table.dataTable tfoot td.dt-head-center
{
    text-align: center;
}
table.dataTable thead th.dt-head-right,table.dataTable thead td.dt-head-right,table.dataTable tfoot th.dt-head-right,table.dataTable tfoot td.dt-head-right
{
    text-align: right;
}
table.dataTable thead th.dt-head-justify,table.dataTable thead td.dt-head-justify,table.dataTable tfoot th.dt-head-justify,table.dataTable tfoot td.dt-head-justify
{
    text-align: justify;
}
table.dataTable thead th.dt-head-nowrap,table.dataTable thead td.dt-head-nowrap,table.dataTable tfoot th.dt-head-nowrap,table.dataTable tfoot td.dt-head-nowrap
{
    white-space: nowrap;
}
table.dataTable tbody th.dt-body-left,table.dataTable tbody td.dt-body-left
{
    text-align: left;
}
table.dataTable tbody th.dt-body-center,table.dataTable tbody td.dt-body-center
{
    text-align: center;
}
table.dataTable tbody th.dt-body-right,table.dataTable tbody td.dt-body-right
{
    text-align: right;
}
table.dataTable tbody th.dt-body-justify,table.dataTable tbody td.dt-body-justify
{
    text-align: justify;
}
table.dataTable tbody th.dt-body-nowrap,table.dataTable tbody td.dt-body-nowrap
{
    white-space: nowrap;
}
table.dataTable,table.dataTable th,table.dataTable td
{
    box-sizing: content-box;
}
.dataTables_wrapper
{
    clear: both;
    position: relative;
    zoom: 1;
}
.dataTables_wrapper .dataTables_length
{
    float: left;
}
.dataTables_wrapper .dataTables_length select
{
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 4px;
    padding: 5px;
}
.dataTables_wrapper .dataTables_filter
{
    float: right;
    text-align: right;
}
.dataTables_wrapper .dataTables_filter input
{
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 3px;
    margin-left: 3px;
    padding: 5px;
}
.dataTables_wrapper .dataTables_info
{
    clear: both;
    float: left;
    padding-top: .755em;
}
.dataTables_wrapper .dataTables_paginate
{
    float: right;
    padding-top: .25em;
    text-align: right;
}
.dataTables_wrapper .dataTables_paginate .paginate_button
{
    border: 1px solid transparent;
    border-radius: 2px;
    box-sizing: border-box;
    color: #333 !important;
    cursor: hand;
    cursor: pointer;
    display: inline-block;
    margin-left: 2px;
    min-width: 1.5em;
    padding: .5em 1em;
    text-align: center;
    text-decoration: none !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current,.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover
{
    background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
    background-color: white;
    border: 1px solid #979797;
    color: purple !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active
{
    background: transparent;
    border: 1px solid transparent;
    box-shadow: none;
    color: cyan !important;
    cursor: default;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover
{
    background: linear-gradient(to bottom, #585858 0%, #111 100%);
    background: -moz-linear-gradient(top, #585858 0%, #111 100%);
    background: -ms-linear-gradient(top, #585858 0%, #111 100%);
    background: -o-linear-gradient(top, #585858 0%, #111 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));
    background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
    background-color: #585858;
    border: 1px solid #111;
    color: white !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active
{
    background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
    background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
    background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background-color: #2b2b2b;
    box-shadow: inset 0 0 3px #111;
    outline: none;
}
.dataTables_wrapper .dataTables_paginate .ellipsis
{
    padding: 0 1em;
}
.dataTables_wrapper .dataTables_processing
{
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
    background-color: white;
    font-size: 1.2em;
    height: 40px;
    left: 50%;
    margin-left: -50%;
    margin-top: -25px;
    padding-top: 20px;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;
}
.dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter,.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_processing,.dataTables_wrapper .dataTables_paginate
{
    color: #ED088D;
}
.dataTables_wrapper .dataTables_scroll
{
    clear: both;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody
{
    margin-top: -1px;
    webkit-overflow-scrolling: touch;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td
{
    vertical-align: middle;
}
.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td>div.dataTables_sizing
{
    height: 0;
    margin: 0 !important;
    overflow: hidden;
    padding: 0 !important;
}
.dataTables_wrapper.no-footer .dataTables_scrollBody
{
    border-bottom: 1px solid #111;
}
.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,.dataTables_wrapper.no-footer div.dataTables_scrollBody>table
{
    border-bottom: none;
}
.dataTables_wrapper:after
{
    clear: both;
    content: "";
    display: block;
    height: 0;
    visibility: hidden;
}
@media screen and (max-width: 767px)
{
    .dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate
    {
        float: none;
        text-align: center;
    }
    .dataTables_wrapper .dataTables_paginate
    {
        margin-top: .5em;
    }
}
@media screen and (max-width: 640px)
{
    .dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter
    {
        float: none;
        text-align: center;
    }
    .dataTables_wrapper .dataTables_filter
    {
        margin-top: .5em;
    }
}
    </style>

<!-- Шрифт Raleway для ЛК 1 Studentа -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">

  <!-- Для локальной стилизации -->
  <script src="https://mylessons.acwarq.repl.co/hackathon/scoped.min.js"></script>
  <!-- ТОСТ СООБЩЕНИЕ исчезающее (скрипт) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->


          <!-- ========================= CSS here ========================= -->
        <link rel="stylesheet" href="https://daanaea.github.io/IT-school/РЛИ/assets/css/bootstrap-5.0.0-alpha.min.css">
        <link rel="stylesheet" href="https://daanaea.github.io/IT-school/РЛИ/assets/css/LineIcons.2.0.css">
        <link rel="stylesheet" href="https://daanaea.github.io/IT-school/РЛИ/assets/css/animate.css">
        <link rel="stylesheet" href="https://daanaea.github.io/IT-school/РЛИ/assets/css/main.css">

    <style type="text/css">@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD-A.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WlhzQ.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD-A.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gTD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3g3D_vx3rCubqg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gbD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gfD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD_vx3rCs.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gTD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3g3D_vx3rCubqg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gbD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gfD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD_vx3rCs.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://mylessons.mantelpiecesb.repl.co/style1.css">
<link rel="stylesheet" type="text/css" href="https://mylessons.mantelpiecesb.repl.co/demo.css">
<link rel="stylesheet" type="text/css" href="https://mylessons.mantelpiecesb.repl.co/nucleo-icons.css">
<link rel="stylesheet" type="text/css" href="https://mylessons.mantelpiecesb.repl.co/style2.css">
<link rel="stylesheet" type="text/css" src="https://mylessons.acwarq.repl.co/hackathon/demo5052021.css"></script>

<base href="/">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Praxis</title>
    <base href="/">

    <link rel="icon" type="image/png" href="https://i.imgur.com/mQFbj5s.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://i.imgur.com/mQFbj5s.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta name="viewport" content="width=device-width"/>
    
    <style type="text/css">@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD-A.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WlhzQ.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD-A.woff) format('woff');}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gTD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3g3D_vx3rCubqg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gbD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gfD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD_vx3rCs.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gTD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3g3D_vx3rCubqg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gbD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gfD_vx3rCubqg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD_vx3rCs.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">


    .sidebar {
        position: absolute;
        width: 100px;
        border-bottom-right-radius: 100px;
        background-color: #040012;
        border-color: white;
        border-width: 1px;
        border-right: 1px;
        border-style: solid;
        border-left: none;
        border-bottom: none;
        border-top: none;
    }

    .section {
        background: #040012;

    }

    p, h1, h2, h3, h4, h5, label, th {
        font-family: 'Raleway';
        font-size: 16px
    }

    .clr_white {
        color: white;

    }

    .clr_black {
        color: black;
        
    }

    .heading {
        font-size: 40px;
        font-family: 'Raleway';
        color: white;
    }

    .title_custom {
        font-size: 40px;
        font-family: 'Raleway';
        color: white;
    }

    .clr_violet {
        color: #6700EE;
    }

    .bg-white {
        background: white
    }

    .fade-in {
      animation: fadeIn ease 3s;
      -webkit-animation: fadeIn ease 3s;
      -moz-animation: fadeIn ease 3s;
      -o-animation: fadeIn ease 3s;
      -ms-animation: fadeIn ease 3s;
    }
    @keyframes fadeIn {
      0% {
        opacity:0;
      }
      100% {
        opacity:1;
      }
    }

    @-moz-keyframes fadeIn {
      0% {
        opacity:0;
      }
      100% {
        opacity:1;
      }
    }

    @-webkit-keyframes fadeIn {
      0% {
        opacity:0;
      }
      100% {
        opacity:1;
      }
    }

    @-o-keyframes fadeIn {
      0% {
        opacity:0;
      }
      100% {
        opacity:1;
      }
    }

    
</style>
<link rel="stylesheet" href="styles.83271dbe17d83a8c85a3.css"></head>
<body style="background: #040012">
    <!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />

       
        <link href="style.css" rel="stylesheet" />

       
    </head>
            <!-- СПИННЕР ЗАГРУЗКИ -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    <body ng-app="">


<nav class="{{active}}" ng-click="$event.preventDefault()" style="">


             <nav class="navbar-area" color-on-scroll="red" style="background-color: white">
                <div class="container" style="">
                    <div class="" style="display: flex">
                        <a class="" href="#beginning" ng-click="active='home'" style="margin-top: 7px; color: black; font-weight: 700; font-size: 25px;">Praxis</a>

                        <div class="btn-group ml-2 col-2">
                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; color: black; background-color: transparent;">
                            News
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="" >Articles</a>
                            <a class="dropdown-item" href="" >Media</a>
                          </div>
                        </div>  
<!-- 
                        <div class="btn-group col-2">
                          <button type="button" class="btn bg-white text-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;">
                            События
                          </button>
                        </div>   --> 

                        <div class="btn-group">
                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; color: black; background-color: transparent;">
                            Courses
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="" ng-click="active='course_description'">Catalog</a>
                            <a class="dropdown-item" href="">Current course</a>
                            <a class="dropdown-item" href="">Mentors</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">Planned courses</a>
                          </div>
                        </div> 
                        
                    
                        <ul class="ml-auto d-flex" style=" margin-top: 11px">
                            <?php if (Yii::app()->user->isGuest): ?>
                            <li class="nav-item" *ngIf="!isDocumentation()">
                                <a href=" " class="projects nav-link" ng-click="active='projects'" style="color: black; font-weight: 600">Sign in</a>
                            </li>
                            <li class="nav-item" *ngIf="!isDocumentation()">
                                <a href=" " class="services nav-link" ng-click="active='services'" style="color: black; font-weight: 600">Sign up</a>
                            </li>
                            <?php endif; ?>
                            <?php if (!Yii::app()->user->isGuest): ?>
                            <li class="nav-item" *ngIf="!isDocumentation()">
                                <a href="/mpit-backend-2021/index.php/site/index_eng?username=sardaana" class="" ng-click="active='student_profile_2'" ng-href="{{active}}" id="test" style="color: black; font-size: 18px;font-weight: 600">Profile: <?php echo Yii::app()->user->name?> </a>
                            </li>
                            <?php endif; ?>
                                            
               
                        </ul>
                    </div>
                </div>
            </nav>


        </nav>

<!-- ГЛАВНАЯ СТРАНИЦА -->
<div ng-show="active==null || active=='home'">
<div class="wrapper fade-in" id="beginning">
    <div class="page-header section-dark " style="background-image: url('https://i.imgur.com/yX2rZQb.png'); background-size: 100% 100%">
        <div class="content-center">
            <div class="container">
                <div class="col-md-9 mx-auto " style="margin-top: 410px">
                    <div class="">
                        <h1 class="clr_black" style="font-size: 70px; font-family: 'Raleway'; font-weight: 900 ">Be practical. <br> Be professional.</h1>   
                    </div>
                    <h2 class="" style="font-family: 'Raleway'; font-size: 20px"> Programming courses with training on the project. A minimum of theory, a maximum of real experience and tasks. Learning a programming language, tools, teamwork under the guidance of a mentor. </h2>
                </div>  
                <div class="col-sm-5 mx-auto text-center" style="margin-top: 20px"> 
                    <button style="height: 70px; background: #6E2FFF; border-width: 0px; font-size: 22px; color: white" class="mx-auto text-center col-sm-12 btn-round" ng-click="active='services'">
                        Sign up
                    </button>
                </div>    
            </div>
        </div>
        
    </div>
    <div class="main">

      <div class="section" >
          <div class="container" style="margin-top: 70px">
              
              <div class="row" style="">
                  <div class="col-md-5 mr-auto ml-auto" style="background-image: url('https://i.imgur.com/Fd8Xfh6.png');background-size: 100% 100%">
                     <h1 class="heading" align="justify" style="font-weight: bold">
                      🎩 What is Praxis and what is it eaten with
                    </h1>
                    <p class="clr_white" align="justify">
                     Mastering an IT specialty is a lifelong journey. Learning programming in practice is more effective - you get practical knowledge, "without water"; apply and employ. The aim of the courses is to give you a fishing rod and teach you how to catch your first fish. The theory of fishing will have to be comprehended in parallel, improving the skill year after year.
                       A mentor is a mentor who helps the ward to master the profession.
                    </p> 
                    <a class="clr_white " style="margin-top: 20px; font-size: 25px;font-weight: bold"> Go to Catalog --> </a>
                  </div>
                  <div class="col-md-7 mx-auto">
                    <div class="col-md-12 ">  
                      <img src="https://i.imgur.com/cN0eUrB.png" style=" border-radius: 40px; margin-top: 10px; " class="col-md-12 img-responsive">
                    </div>
                  </div>

              </div>
          </div>
      </div>
      <!-- Partners -->
      <div class="section" style="padding-top: 10px; padding-bottom: 15px" id="description" >
        <div class="container w-100 " style="background-image: url('https://i.imgur.com/HbEEwM6.png'); background-size: 100% 100%; padding-bottom: 150px"> 
          <h1 class="text-center heading" style="font-weight: bold">
            Our partners 💥
          </h1>
          <div class="col-md-10 mx-auto" style="padding-top: 12px">  
            <p class="text-center clr_white"> 
                Project mentors are active specialists from companies such as Google, Accenture, IBM, who have rich practical experience and are leaders in the modern market.
            </p>
          </div>
          <!-- Partners parent div -->
          <div class="mx-auto col-md-12 row" style="" >
            <div class="col-md-2 mx-auto" style="height: 90px; margin-top: 90px">
                <img class="mx-auto" style="height: 90px;" src="https://i.imgur.com/ik0okdH.png">
            </div>  
            
            <div class="col-md-2 mx-auto" style="height: 190px; margin-top: 45px">
                <img class="mx-auto" style="height: 90px" src="https://i.imgur.com/6MgsJW9.png">          
                <img class="mx-auto" style="height: 90px; margin-top: 12px" src="https://i.imgur.com/XutlBF7.png">
            </div>
            <div class="col-md-2 mx-auto" style="height: 290px">
                <img class=" mx-auto" style="height: 90px" src="https://i.imgur.com/iZEyS02.png">   
                <img class=" mx-auto" style="height: 90px; margin-top: 12px" src="https://i.imgur.com/ZvKMhhm.png">
                <img class=" mx-auto" style="height: 90px; margin-top: 12px" src="https://i.imgur.com/oG7upI8.png">
            </div>
            <div class="col-md-2 mx-auto" style="height: 190px; margin-top: 45px">
                <img class=" mx-auto" style="height: 90px" src="https://i.imgur.com/RJDtcQV.png">
                <img class=" mx-auto" style="height: 90px; margin-top: 12px" src="https://i.imgur.com/tw2ouHh.png">
            </div>
            <div class="col-md-2 mx-auto" style="height: 90px; margin-top: 90px; ">
                <img class="mx-auto" style="height: 90px" src="https://i.imgur.com/0V3x4w9.png">
            </div>
          </div>
        </div>
      </div>
      <!-- Актуальные Кейсы -->
      <div class="section mx-auto" style="padding-top: 30px">
        <div class="container mx-auto" style="background-image: url('https://i.imgur.com/MJ0GQjU.png'); background-size: 100% 100%">
          <h1 class="text-center heading clr_white" style="padding-top: 0px; font-weight: bold"> Actual cases </h1>
          <div class="col-md-8 text-center mx-auto" style="">
            <p class="subtitle clr_white" style="padding-top: 8px"> A selection of projects that your child may like: </p>
          </div>
          <div class="col-md-12 mx-auto" style="margin-top: 20px; height:650px">
            <div class="mx-auto row" style="margin-top: 25px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/ROaWII9.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black">Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet</p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto" style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>

            </div>

            <div class="mx-auto row" style="margin-top: 25px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div ng-click="active='course_description'" class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px;background-image: url('https://i.imgur.com/ROaWII9.png')">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 mx-auto row" style="height: 60px; margin-top: 33px">
                <div class="col-md-8 mx-auto" style="height: 60px">

                </div>
                <div class="col-md-4 mx-auto" style="height: 60px">
                    <a style="font-size: 21px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_white"> Перейти в Каталог --> </a>
                </div>
            </div>                    
          </div>
        </div>
      </div>

      
      <div class="section mx-auto " style="padding-top: 15px; padding-bottom: 60px">
        <div class="container mx-auto" style="background-image: url(''); background-size: 100% 100%; "> 
          <h1 class="text-center heading clr_white" style="padding-top: 0px;font-weight: bold"> Why Praxis? 👾 </h1>
          
          <div class="mx-auto row" style="margin-top: 40px">
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/kxSFHJV.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 23px; font-weight: bold; margin-top: 0px; padding-top: 70px; margin-left: 15px; "> Mentoring is the most effective technique </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> When learning with a mentor, the student solves the problem on his own. It is much more effective than self-solving problems or lecture courses. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/V9iFQTD.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px; ">Mentors are active specialists</h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Unlike a theoretical teacher, a mentor is a practitioner who works on similar tasks, knows the industry from the inside, its pitfalls and best practices.</p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/zNcsEb9.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px; margin-left: 20px;"> Just practice. That's it. </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> You do not pay to attend lectures. This can be done for free. You pay for experience. </p>
              </div>
            </div>
          </div>

          <div class="mx-auto row " style="margin-top: 22px"> 
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/V9iFQTD.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px"> Real and actual practical tasks </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Knowledge and skills are relevant and needed, what a specialist faces at work, nothing superfluous or theoretical. The curriculum is regularly updated to meet the needs of the market. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/zNcsEb9.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px">Online education</h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Our training takes place remotely. Educational processes are perfected to perfection with a user-friendly interface and automation of all processes. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/kxSFHJV.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px"> Opportunity to study on a commercial case </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> You get an understanding of how a real project and a team work, an opportunity to feel it all in practice and find out if this profession is right for you. </p>
              </div>
            </div>
          </div>
        </div>
      </div>

     <!-- ======= Как проходит обучение ======= -->
<div class="section mx-auto" style="padding-top: 60px">
   <div class="container mx-auto" style="background-image: url('https://i.imgur.com/uCzAK1P.png'); background-size: 100% 100%">
      <h1 class="text-center title_custom clr_white heading" style="margin-top: 0px; font-weight: bold">How is the training going?</h1>
      <div class="col-md-8 text-center mx-auto" style="">
         <p class="subtitle" style="color: white"> After registering, you will automatically get access to a free mini-project, which you will complete with your mentor. </p>
      </div>
      <div class="accordion col-md-9 mx-auto" id="accordionExample" >
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                  Sign up
                  </button>
               </h2>
            </div>
            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                    After registering, you get access to mentor courses.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne" >
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                  Creating a free mini-project
                  </button>
               </h2>
            </div>
            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  You carry out a joint project together with a mentor, sharpened for a good start to your career
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                  Subscription payment
                  </button>
               </h2>
            </div>
            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                    The amount of paid time directly depends on both parties (Mentor, student). The mentor sets the price for his course within the acceptable limits, and the student himself chooses the duration of his participation in the process
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                  Choose your project
                  </button>
               </h2>
            </div>
            <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Over time, both new mentors and new students will come to the platform, respectively, the number and variety of Active Courses will increase.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                  Communication with a mentor
                  </button>
               </h2>
            </div>
            <div id="collapseOne5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body"> 
                    After paying for the selected case, the Mentor contacts you and starts his activity (Sends assignments, conducts joint consultations)
               </div>
            </div>
         </div>
      </div>
   </div>
</div>    
        <!-- Карусель с менторами -->

      <div class="section mx-auto" style="padding-top: 20px">
        <div class="container mx-auto">
          <h1 class="text-center title_custom clr_white heading" style="padding: 0px; font-weight: bold">Favorite mentors</h1>
                    <div class="col-md-8 text-center mx-auto" style="">
            <p class="subtitle" style="color: black"> Super Mentor could be an internal or external person that offers one-on-one coaching for your mentors. </p>
          </div>
          
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-group ">
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-group ">
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                      <div class="card">
                        <img src="https://i.imgur.com/EaBLU5Z.png" class="card-img-top" style="height: 250px" alt="...">
                        <div class="card-body pt-0 mt-0 text-center">
                            <div class="row py-3" style="background-color: #33D6F5">
                                <p class="card-text">Reputation: 5142 stars</p>
                            </div>
                          <h5 class="card-title">Игорь Перчаткин</h5>
                          <p class="card-text text-secondary">UI/UX designer</p>
                          <p class="card-text" align="justify">I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House ...</p>
                          <a href="" ng-click="active='mentor_profile'" class="card-text">Watch the profile</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"><i class="fas fa-angle-up"></i></a> -->
</div>

        
<div ng-show="active=='projects'" class="fade-in">
    
                <?php
                    /* @var $this SiteController */
                    /* @var $model LoginForm */
                    /* @var $form CActiveForm  */

                    $this->pageTitle=Yii::app()->name . ' - Login';
                    $this->breadcrumbs=array(
                        'Войти',
                    );
                    ?>



                    <div class="form">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableAjaxValidation'=> false,
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); ?>
                    <div class="" style="background-image: url(); background-color: #040012">
                      <div class="filter"></div>
                                <div class="container">

                    <div class="text-center" style="padding-top: 50px; padding-bottom: 0px;margin-bottom: 0px">
                        <h1 style="color: white; font-family: 'Raleway'">Fasten your seat belts, let's take off!</h1>
                        <p style="color: white; font-family: 'Raleway'">You leave a request and we will contact you. You take an express test, after which you get access to courses that are suitable for you. The length of your studies depends on how much time you spend studying and on your subscription. And upon completion, you will have work experience and a project in your portfolio. Isn't that great?</p>
                    </div>

                    <div class="col-lg-6 col-sm-6 mr-auto ml-auto" style="background-color: red; padding-top: 0px; margin-top: 0px; background-image: url(https://media.discordapp.net/attachments/760372831946670104/839689745398628382/Screen_Shot_06.05.2021_at_11.25.png?width=610&height=602); background-size: 100% 100%">
                        <div class="card card-register col-8 mx-auto" style="background-color: white; color:black; padding-top: 0px; margin-top: 60px">

                            <h3 class="text-center" style="font-weight: 800">Sign in to Praxis</h3>
                            <img src="https://media.discordapp.net/attachments/760372831946670104/839671006674288650/registration_login_form_logo.png?width=480&height=500" class="col-7 mx-auto">
                        <div class="row">
                            <?php echo $form->labelEx($model[0],'username',array('label'=>'Login')); ?>
                            <?php echo $form->textField($model[0],'username', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[0],'username'); ?>
                        </div>



                        <div class="row">
                            <?php echo $form->labelEx($model[0],'password',array('label'=>'Password')); ?>
                            <?php echo $form->passwordField($model[0],'password', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[0],'password');?>
                        </div>

                        <div class="row rememberMe">
                                     <div class="custom-control custom-checkbox">
                                        <?php echo $form->checkBox($model[0],'rememberMe', array('class' => 'custom-control-input', 'checked'=>'', 'value'=>'', 'label' => 'Remember me')); ?> 
                                        <?php echo $form->label($model[0],'rememberMe', array('class' => "custom-control-label")); ?>
                                        <?php echo $form->error($model[0],'rememberMe'); ?> 
                                     </div>
                        </div>

                        <div class="row buttons">
                            <?php echo CHtml::submitButton('SIGN IN', array('class'=>'btn btn-success btn-block')); ?>
                        </div>

                                                 
                        </div>
                    </div>

                    </div>
                    <?php $this->endWidget(); ?>

                    </div>


            </div>
    </div>

<div ng-show="active=='services'" class="fade-in">
                    
                    <?php
                    /* @var $this SiteController */
                    /* @var $model LoginForm */
                    /* @var $form CActiveForm  */

                    $this->pageTitle=Yii::app()->name . ' - Login';
                    $this->breadcrumbs=array(
                        'Sign up',
                    );
                    ?>



                    <div class="form">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'registration-form',
                        'enableAjaxValidation'=> true,
                        'enableClientValidation'=>false,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>false,
                        ),
                    )); ?>
                    <div class="" style="background-image: url(); background-color: #040012">
                      
                                <div class="container">

                    <div class="text-center" style="padding-top: 50px; padding-bottom: 0px;margin-bottom: 0px">
                        <h1 style="color: white; font-family: 'Raleway'; font-size: 56px; font-weight: bold;">Fasten your seat belts, let's take off!</h1>
                        <p style="color: white; font-family: 'Raleway'">You leave a request and we will contact you. You take an express test, after which you get access to courses that are suitable for you. The length of your studies depends on how much time you spend studying and on your subscription. And upon completion, you will have work experience and a project in your portfolio. Isn't that great?</p>
                    </div>

                    <div class="col-lg-6 col-sm-6 mr-auto ml-auto" style="background-color: red; padding-top: 0px; margin-top: 0px; background-image: url(https://media.discordapp.net/attachments/760372831946670104/839689745398628382/Screen_Shot_06.05.2021_at_11.25.png?width=610&height=602); background-size: 100% 100%">
                        <div class="card card-register col-8 mx-auto" style="background-color: white; color:black; padding-top: 0px; margin-top: 60px">

                            <h3 class="text-center" style="font-weight: 800">Sign up for Praxis</h3>
                            <img src="https://media.discordapp.net/attachments/760372831946670104/839671006674288650/registration_login_form_logo.png?width=480&height=500" class="col-7 mx-auto">
                        <div class="row">
                            <?php echo $form->labelEx($model[1],'username', array('label' => 'Login')); ?>
                            <?php echo $form->textField($model[1],'username', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[1],'username'); ?>
                        </div>

                        <!-- Это будет в личном кабинете, доп.информация профиля -->
                        <!-- <div class="row">
                            <?php //echo $form->labelEx($model[1],'name'); ?>
                            <?php //echo $form->textField($model[1],'name', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php //echo $form->error($model[1],'name'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model[1],'surname'); ?>
                            <?php //echo $form->textField($model[1],'surname', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php //echo $form->error($model[1],'surname'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model[1],'birth_date'); ?>
                            <?php //echo '<br>' ?>
                             <?php //echo $form->textField($model[1],'birth_date', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php //echo $form->error($model[1],'birth_date'); ?>
                        </div>

                        <div class="row">
                            <?php //echo $form->labelEx($model[1], 'sex'); ?>
                            <?php //echo '<br>' ?>
                        <?php //echo '<br>'. $form->dropDownList($model[1],'sex',array(
                            //'Мужской'=>'Мужской',
                            //'Женский'=>'Женский',),
                                  //  array('empty'=>'Укажите свой пол', 'class' => 'chosen-select')); ?>
                            <?php //echo $form->error($model[1], 'sex'); ?>
                        </div>  --> 

                        <div class="row">
                            <?php echo $form->labelEx($model[1],'email'); ?>
                            <?php echo $form->textField($model[1],'email', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[1],'email');?>
                        </div>

                        <div class="row">
                            <?php echo $form->labelEx($model[1],'password', array('label' => 'Password')); ?>
                            <?php echo $form->passwordField($model[1],'password', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[1],'password');?>
                        </div>

                        <div class="row">
                            <?php echo $form->labelEx($model[1],'password_repeat', array('label' => 'Repeat your password')); ?>
                            <?php echo $form->passwordField($model[1],'password_repeat', array('type' => 'text', 'class' => 'form-control', '(focus)'=>'focus=true', '(blur)'=>'focus=false')); ?>
                            <?php echo $form->error($model[1],'password_repeat');?>
                        </div>

                        <div class="row buttons">
                            <?php echo CHtml::submitButton('SIGN UP', array('class'=>'btn btn-success btn-block')); ?>
                        </div>
                        <br>
                        <p class="text-center">Have an account? <a href="" class="text-success" ng-click="active='projects'">Sign in</a></p>
                                                 
                        </div>
                    </div>

                    </div>
                    <?php $this->endWidget(); ?>

                    </div>


            </div>
</div>
</div>

<!-- Описание курса -->

<div ng-show="active=='course_description'" class="fade-in">
        <div class="page-header section-dark fade-in" style="background-image: url('https://i.imgur.com/SxLHjNm.png'); ">
        
            <div class="col-md-12">
              <div class="row ">
                <div class="col-md-11 mx-auto" >
                    <h1 class="title_custom col-mb-10 clr_white" style="margin-top: 0px; font-size: 70px; font-weight: bold"> Web: Online service<br> for kids KidCode </h1>
                    <p align="justify" style="font-size: 24px; padding-top: 20px; padding-left: 0px" class="col-md-7 clr_white "> KidCode offers a free course for preschool and school children from 5 to 11 years old to help them better navigate the Internet. Our classes will help improve the safety of your child and protect him from potential cyber fraudsters. Using the account, it will be possible to view the rating of the child's knowledge. </p>
                    <button ng-click="active='course_order'" class="text-light col-5 btn-round" style="border-width: 0px; background: #6700EE;font-size: 24px; height: 70px; margin-top: 70px; "> Buy the course 
                    </button>
                </div>
               
              </div>  
              <div class="row col-md-12 " style="height: 80px; margin-top: 160px">
                <div class="col-md-2 mx-auto" >
                    
                </div>
                <div class="col-md-2 mx-auto" >
                    
                </div>
                <div class="col-md-2 mx-auto" >
                    
                </div>
                <div class="col-md-2 mx-auto" >
                    
                </div>
                <div class="col-md-2 mx-auto" >
                    
                </div>
              </div> 
           </div>
       
        </div>
<div class="main fade-in">
    
    <div class="section mx-auto" style="padding-top: 30px; ">
   <div class="h-100" style="background-image: url('https://i.imgur.com/2TRnBp0.png'); background-size: 100% 100%"> 
   <div class="container mx-auto " >
      <h1 class="text-center title_custom clr_white heading" style="margin-top: 210px; font-weight: bold">KidCode project program</h1>
      <div class="col-md-8 text-center mx-auto" style="">
         <p class="subtitle" style="color: black"> KidCode course consists of 5 blocks: cybersecurity; protection of personal information; network user ethics; sorting information; digital citizenship. </p>
      </div>
      <div class="accordion" id="accordionExample">
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                  Sign up
                  </button>
               </h2>
            </div>
            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne" >
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                  Creating a free mini-project
                  </button>
               </h2>
            </div>
            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                  Subscription payment
                  </button>
               </h2>
            </div>
            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                  Choose your project
                  </button>
               </h2>
            </div>
            <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                  Communication with mentor
                  </button>
               </h2>
            </div>
            <div id="collapseOne5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                  Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
               </div>
            </div>
         </div>
      </div>
   </div>
</div> 

    <div class="section bg-light" style="padding-top: 5px; padding-bottom: 1px">
        <div class="container w-100" style=";height: 330px">
            <div class="row mx-auto" style="margin-top: 150px">
                <div class="col-md-7 mx-auto" style="height: 200px; padding-right: 0px">
                     <h1 class="title_custom col-mb-10 clr_black" style="margin-top: 10px; font-size: 50px; color: black; font-weight: bold"> Characteristics<br> of KidCode </h1>
                    <p align="justify" style="font-size: 21px; padding-top: 20px; padding-left: 0px" class="col-md-7 clr_black "> Information about the project in numbers </p>
                </div>

                <div class="col-md-5 mx-auto" style="height: 200px; padding-left: 0px">
                    <div class="row mx-auto">  
                        <div class="row col-6" style="padding: 0px">
                            <img src="https://i.imgur.com/8uOU9Bc.png" style="height: 55px;padding: 0px; " class="col-md-3">
                            <div class="col-md-9" style="padding: 0px">    
                                <h1 style="margin-top: 0px; font-size: 25px; font-weight: bold; "> 2 months </h1>
                                <p class="" style="font-size: 18px"> Duration </p>
                            </div>
                        </div>
                        <div class="row col-6" style="padding: 0px">
                            <img src="https://i.imgur.com/66pceHU.png" style="height: 55px;padding: 0px; " class="col-md-3">
                            <div class="col-md-9" style="padding: 0px">    
                                <h1 style="margin-top: 0px; font-size: 25px; font-weight: bold; "> 2 months </h1>
                                <p class="" style="font-size: 18px"> Duration </p>
                            </div>
                        </div>
                    </div> 

                    <div class="row mx-auto" style="margin-top: 25px">  
                        <div class="row col-6" style="padding: 0px">
                            <img src="https://i.imgur.com/TKjaEaf.png" style="height: 55px;padding: 0px; " class="col-md-3">
                            <div class="col-md-9" style="padding: 0px">    
                                <h1 style="margin-top: 0px; font-size: 25px; font-weight: bold; "> 2 months </h1>
                                <p class="" style="font-size: 18px"> Duration </p>
                            </div>
                        </div>
                        <div class="row col-6" style="padding: 0px">
                            <img src="https://i.imgur.com/o0A0QUW.png" style="height: 55px;padding: 0px; " class="col-md-3">
                            <div class="col-md-9" style="padding: 0px">    
                                <h1 style="margin-top: 0px; font-size: 25px; font-weight: bold; "> 2 months </h1>
                                <p class="" style="font-size: 18px"> Duration </p>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

</div>

<div class="section mx-auto">
    <div class="container mx-auto" style="background-image: url('https://i.imgur.com/VfrYr7j.png'); background-size: 100% 100%">
        <div class="col-md-12 mx-auto" style="">
            <div class="row">
                <div class="col-md-6 mx-auto">       
                    <img src="https://i.imgur.com/8vMSBSR.png" class="col-12" style="border-radius: 20px; ">
                </div>
                <div class="col-md-6 mx-auto">
                    <h1 class="heading clr_white" style="margin-top: 5px; font-weight: bold">
                         Project mentor -<br> Игорь Перчаткин
                    </h1>
                    <p class="text-muted" style="font-size: 20px; margin-top: 5px"> UI/IX designer </p>
                    <p class="clr_white" style="font-size: 16px"> I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House. The motto for life ... it is not, but my glass is always half full!</p>
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="clr_white" style="font-size: 30px; margin-top: 0px"> 5 years </h1>
                            <p class="text-success" style="font-size: 16px; ">in IT </p>
                        </div>
                        <div class="col-md-5">
                            <h1 class="clr_white" style="font-size: 30px; margin-top: 0px"> 0,5 year </h1>
                            <p class="text-success" style="font-size: 16px; "> Mentoring experience </p>
                        </div>
                    </div>
                    <div class="row text-center col-md-8" style="padding: 0px">
                        <img src="https://i.imgur.com/mJzEWWt.png" style="height: 64px; width: 64px; padding: 0px" class="mx-auto">
                        <img src="https://i.imgur.com/DDFV4Ga.png" style="height: 64px; width: 64px; padding: 0px" class="mx-auto">
                        <img src="https://i.imgur.com/z5Di3d7.png" style="height: 64px; width: 64px; padding: 0px" class="mx-auto">
                        <img src="https://i.imgur.com/b77MBZz.png" style="height: 64px; width: 64px; padding: 0px" class="mx-auto">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section mx-auto " style="padding-top: 15px; padding-bottom: 60px">
        <div class="container mx-auto" style="background-image: url(''); background-size: 100% 100%; "> 
          <h1 class="text-center heading clr_white" style="padding-top: 0px; font-weight: bold"> Why Praxis? 👾 </h1>
          
          <div class="mx-auto row" style="margin-top: 40px">
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/kxSFHJV.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 23px; font-weight: bold; margin-top: 0px; padding-top: 70px; margin-left: 15px; "> Mentoring is the most effective technique </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> When learning with a mentor, the student solves the problem on his own. It is much more effective than self-solving problems or lecture courses. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/V9iFQTD.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px; ">Mentors are active specialists </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Unlike a theoretical teacher, a mentor is a practitioner who works on similar tasks, knows the industry from the inside, its pitfalls and best practices. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/zNcsEb9.png'); background-size: 100% 100%; margin-left: 30px" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px; margin-left: 20px;"> Just practice. That's it. </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> You do not pay to attend lectures. This can be done for free. You pay for experience. </p>
              </div>
            </div>
          </div>

          <div class="mx-auto row " style="margin-top: 22px"> 
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/V9iFQTD.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px"> Real and actual practical tasks</h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Knowledge and skills are relevant and needed, what a specialist faces at work, nothing superfluous or theoretical. The curriculum is regularly updated to meet the needs of the market. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/zNcsEb9.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px"> Online education </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> Our training takes place remotely. Educational processes are perfected to perfection with a user-friendly interface and automation of all processes. </p>
              </div>
            </div>
            <div class="mx-auto col-md-4" style="">
              <div style="background-image: url('https://i.imgur.com/kxSFHJV.png'); background-size: 100% 100%;" class="w-100 h-100">
                  <h1 class="clr_white heading" style="font-size: 27px; font-weight: bold; margin-top: 0px; padding-top: 70px"> Opportunity to study on a commercial case </h1>
                  <p class="clr_white col-md-10" style="padding-top: 15px"> You get an understanding of how a real project and a team work, an opportunity to feel it all in practice and find out if this profession is right for you. </p>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <!-- Актуальные Кейсы -->
      <div class="section mx-auto" style="padding-top: 30px">
        <div class="container mx-auto" style="background-image: url('https://i.imgur.com/MJ0GQjU.png'); background-size: 100% 100%">
          <h1 class="text-center heading clr_white" style="padding-top: 0px; font-weight: bold"> Actual cases </h1>
          <div class="col-md-8 text-center mx-auto" style="">
            <p class="subtitle clr_white" style="padding-top: 8px"> A selection of projects that your child may like: </p>
          </div>
          <div class="col-md-12 mx-auto" style="margin-top: 20px; height:650px">
            <div class="mx-auto row" style="margin-top: 25px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/ROaWII9.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto" style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>

            </div>

            <div class="mx-auto row" style="margin-top: 25px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px;background-image: url('https://i.imgur.com/ROaWII9.png')">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 mx-auto row" style="height: 60px; margin-top: 33px">
                <div class="col-md-8 mx-auto" style="height: 60px">

                </div>
                <div class="col-md-4 mx-auto" style="height: 60px">
                    <a style="font-size: 21px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_white"> Перейти в Каталог --> </a>
                </div>
            </div>                    
          </div>
        </div>
      </div>

</div>  
</div>

<!-- Профиль Studentа 1 -->
<div ng-show="active=='student_profile_1'" class="fade-in">
    <style scoped>
        p, h1, h2, h3, h4, h5, h6 {
        font-family: 'Raleway';
      } 

      .sidebar_div {
        /*width: 90px;*/
        height: 90px;
        margin-top: 15px;
        transition: 1s;
        background: blue
      }

      .sidebar_div:hover {
        background-color: green;

      }
    </style>
    <div class="d-flex">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png');">
            <div class="col-md-9 mx-auto">
                <h1 class="heading clr_white " style="font-weight: bold"> Activity Panel </h1>
                
            </div>    
        </div>
        
    </div>
    <div style="display: flex">
       <div class="h-75 sidebar" style="" >
                <a href="" class="services" ng-click="active='student_profile_1'" title="Control Panel" data-toggle="tooltip" data-placement="right">
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/O3CYI3i.png'); background-size: 100% 100%" >
                        
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_2'" title="Profile"> 
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/vkCXTqb.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_3'" title="Task_list"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/V0jWmAe.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_4'" title="Rating">  
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/1YlNRAt.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_5'" title="Notifications"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/zJ8gaG1.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                 
        </div>

    <div>
    <div class="col-md-9 mx-auto" style="">
      <div class="col-md-12 mx-auto" style="padding-top: 15px">
          
        <h1 class="clr_white" style="padding-top: 20px;padding-bottom: 30px; font-weight: bold; font-size: 41px"> News </h1>
      </div>
      <div class="card-deck">
              <div class="card">
                <img src="https://i.imgur.com/VZV0gee.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">SpaceX launched 60 StarlinkSpaceX satellites </h5>
                  <p class="card-text">Satellites were launched from gate 39A (LC-39A) in space research centre, Florida.</p>
                  <p class="card-text"><small class="text-muted">05.04.2021, Tuesday.</small></p>
                </div>
              </div>
              <div class="card">
                <img src="https://i.imgur.com/VZV0gee.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">SpaceX launched 60 StarlinkSpaceX satellites </h5>
                  <p class="card-text">Satellites were launched from gate 39A (LC-39A) in space research centre, Florida.</p>
                  <p class="card-text"><small class="text-muted">05.04.2021, Tuesday.</small></p>
                </div>
              </div>
              <div class="card">
                <img src="https://i.imgur.com/VZV0gee.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">SpaceX launched 60 StarlinkSpaceX satellites </h5>
                  <p class="card-text">Satellites were launched from gate 39A (LC-39A) in space research centre, Florida.</p>
                  <p class="card-text"><small class="text-muted">05.04.2021, Tuesday.</small></p>
                </div>
              </div>
        </div>
    </div>

    </div>
    </div>
    
    <!-- Таблица сообщений -->
    <div class="mx-auto col-9" style="padding-top: 30px; padding-bottom: 30px">
        <?php $current_user_new_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'new'));
        $current_user_current_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'current'));
    $current_user_done_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'done'));
        ?>

        <h1 class="clr_white heading " style="padding-bottom: 25px; font-weight: bold"> Tasks </h1>
        <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link" id="nav-home-tab" data-toggle="tab" href="#col11" role="tab" aria-controls="col11" aria-selected="false">New <span class="badge badge-danger badge-pill"><?php echo count($current_user_new_tasks);?></span></a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#col21" role="tab" aria-controls="col21" aria-selected="false">Current <span class="badge badge-warning badge-pill"><?php echo count($current_user_current_tasks);?></span></a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#col31" role="tab" aria-controls="col31" aria-selected="false">Done <span class="badge badge-success badge-pill"><?php echo count($current_user_done_tasks);?></span></a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <!-- НОВЫЕ ЗАДАЧИ -->
      <div class="tab-pane fade show" id="col11" role="tabpanel" aria-labelledby="col11">
            <div class="list-group">
            <?php 

                foreach ($current_user_new_tasks as $new_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action active\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$new_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$new_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>

       <!-- ТЕКУЩИЕ ЗАДАЧИ -->
      <div class="tab-pane fade" id="col21" role="tabpanel" aria-labelledby="col21">
            <div class="list-group">
                <?php 

                foreach ($current_user_current_tasks as $current_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$current_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$current_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>

       <!-- ВЫПОЛНЕННЫЕ ЗАДАЧИ -->
      <div class="tab-pane fade" id="col31" role="tabpanel" aria-labelledby="col31">
            <div class="list-group">
                <?php 
                
                foreach ($current_user_done_tasks as $done_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$done_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$done_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>
    </div>
   
    </div>
    
    
</div>


<!-- Профиль Studentа 2 -->
<div ng-show="active=='student_profile_2'" class="fade-in" style="z-index: 1; position: relative;">
    <div class="wrapper fade-in">
    <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png'); z-index: 1">
        <div class="col-md-9 mx-auto">
            <h1 class="heading clr_white" style="font-weight: bold"> Profile </h1>    
        </div>
    </div>
    <div class="h-75 sidebar" style="" >
                <a href="" class="services" ng-click="active='student_profile_1'" title="Control Panel">
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/O3CYI3i.png'); background-size: 100% 100%" >
                        
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_2'" title="Profile"> 
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/vkCXTqb.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_3'" title="Task_list"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/V0jWmAe.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_4'" title="Rating">  
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/1YlNRAt.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_5'" title="Notifications"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/zJ8gaG1.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                 
        </div>


    <!-- Profile -->
    <?php $current_user = $model[1]->findByAttributes(array('username' => Yii::app()->user->name)); ?>
    <div class=" " >
        <div class="container">
            <div class="owner"> 
                    
                <div class="name" style="margin-top: 10px">
                    <div class="row mx-auto col-md-5 text-center" style="padding-right: 0px; padding-left: 0px">
                        <img src="<?php echo $current_user->avatar_link; ?>" alt="" class="img-circle img-no-padding img-responsive mx-auto" style="z-index: 20;height: 340px; width: 340px; " align="center">
                        <h1 style="margin-top: 4px; padding-right: 0px; padding-left: 15px" class="title_custom col-md-12"><?php 
                        
                        echo $current_user->name . " " . $current_user->surname;
                        ?>

                         </h1>
                           
                    </div> 
                    <div class="col-md-6 mx-auto" style="padding: 0px">    
                               <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2222" aria-expanded="false" aria-controls="collapseExample2222">
                                    Edit
                                </button>

                               <a class="btn btn-primary" href="/mpit-backend-2021/index.php/site/logout">
                                    Logout
                                </a>

                    </div> 
                    <h3 style="margin-top: 6px; font-size: 20px" class="clr_white" >
                    <?php echo $current_user->profession;
                    if($current_user->isMentor == null) {
                        echo " (Student) <br> mentor: {$current_user->mentor_name}";
                    } ?></h3>    
                    <!-- <h3 style="margin-top: 6px; font-size: 20px" class="clr_white" > Разработчик </h3> -->
                </div>

                <div class="collapse" id="collapseExample2222">
                  <div class="">

                   <h1 style="color: white">Profile edit</h1>
                        <div class="form">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                           'id'=>'update_form',
                           'enableAjaxValidation'=> false,
                           'enableClientValidation'=>true,
                           'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                           ),
                           )); ?>

                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'name', array('style' => 'color: #ED088D', 'label' => 'Name')); ?>
                                             <?php echo $form->textField($model[1],'name', array()); ?>
                                             <?php echo $form->error($model[1],'name'); ?>
                                          </div>

                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'surname', array('style' => 'color: #ED088D', 'label' => 'Surname')); ?>
                                             <?php echo $form->textField($model[1],'surname', array()); ?>
                                             <?php echo $form->error($model[1],'surname'); ?>
                                          </div>

                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'user_about', array('style' => 'color: #ED088D', 'label' => 'About me')); ?>
                                             <?php echo $form->textField($model[1],'user_about', array()); ?>
                                             <?php echo $form->error($model[1],'user_about'); ?>
                                          </div>

                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'birth_date', array('style' => 'color: #ED088D', 'label' => 'Birthdate')); ?>
                                             <?php echo $form->textField($model[1],'birth_date', array()); ?>
                                             <?php echo $form->error($model[1],'birth_date'); ?>
                                          </div>

                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'profession', array('style' => 'color: #ED088D', 'label' => 'Profession')); ?>
                                             <?php echo $form->textField($model[1],'profession', array()); ?>
                                             <?php echo $form->error($model[1],'profession'); ?>
                                          </div>
                                          <div class="row">
                                             <?php echo $form->labelEx($model[1],'avatar_link', array('style' => 'color: #ED088D', 'label' => 'Avatar image URL')); ?>
                                             <?php echo $form->textField($model[1],'avatar_link', array()); ?>
                                             <?php echo $form->error($model[1],'avatar_link'); ?>
                                          </div>
                                          <br>

                                          <div class="row buttons">
                                             <?php echo CHtml::submitButton('SAVE', array('class' => 'btn btn-primary')); ?>
                                          </div>
                                         
                                 <?php $this->endWidget(); ?>
                        </div>
                  </div>
                </div>
<!-- 
                <div class="col-md-8 mx-auto">
                  <h2 class="title_custom " style="font-size: 22px; text-align: center;"> Сильные Стороны : ШТУКИ ИЗ БД </h2>
                  <h2 class="title_custom " style="font-size: 22px; text-align: center;"> Слабые Стороны : ШТУКИ ИЗ БД</h2>
                </div> -->



                <div class="text-center mx-auto col-md-9 clr_white" style="margin-top: 20px">
                    <p style="color: white; "><?php echo "About me: <br><br>" . $current_user->user_about; ?></p>
                </div>

                <div class="mx-auto col-md-4" style="margin-top: 27px">
                    
                        <a class="mr-2" href="https://www.instagram.com/mpityakutia/?hl=ru" target="_blank"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697269158182922/insta_logo.png" style="height:70px; width: 70px" class="img-responsive"></a>
                    
                    
                        <a class="mr-2" href="https://twitter.com/?lang=ru" target="_blank"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697265635622922/twitter_logo.png" style="height:70px; width: 70px" class="img-responsive"></a>
                   
                    
                        <a class="" href="https://www.youtube.com/channel/UCXgM6C_NV33xWk3Ke8GucqA" target="_blank"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697266490605588/youtube_logo.png" style="height:70px; width: 70px" class="img-responsive"></a>
                          
                </div>

                <div class="col-md-10 mx-auto">
                </div>
                    
                </div>        
            </div> 

            <div class="col-md-7 mx-auto text-center">
<?php if($current_user->isMentor == '1'): ?>
      <div class="text-center">

   <h1 style="color: white">Send a task</h1>
        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
           'id'=>'вфывыф',
           'enableAjaxValidation'=> false,
           'enableClientValidation'=>true,
           'clientOptions'=>array(
               'validateOnSubmit'=>true,
           ),
           )); ?>

                          <div class="row">
                             <?php echo $form->labelEx($model[5],'task_header', array('style' => 'color: #ED088D', 'label' => 'Task header')); ?>
                             <?php echo $form->textField($model[5],'task_header', array()); ?>
                             <?php echo $form->error($model[5],'task_header'); ?>
                          </div>

                          <div class="row text">
                             <?php echo $form->labelEx($model[5],'subtasks', array('style' => 'color: #ED088D', 'label' => 'Task details')); ?>
                             <?php echo $form->textField($model[5],'subtasks', array()); ?>
                             <?php echo $form->error($model[5],'subtasks'); ?>
                          </div>

                          <div class="row ">
                             <?php echo $form->labelEx($model[5],'student_name', array('style' => 'color: #ED088D', 'label' => 'Student login')); ?>
                             <?php echo $form->textField($model[5],'student_name', array()); ?>
                             <?php echo $form->error($model[5],'student_name'); ?>
                          </div>
                          <br>

                          <div class="row buttons text-center">
                             <?php echo CHtml::submitButton('SEND', array('class' => 'btn btn-primary')); ?>
                          </div>
                         
                 <?php $this->endWidget(); ?>
        </div>
  </div>
<?php endif; ?>

<?php if($current_user->isMentor == '1'): ?>
    <div>
        <h1 style="color:white">Reports from students</h1>
        <?php $comments_about_you = $model[3]->findAllByAttributes(array('mentor_name' => Yii::app()->user->name));
            foreach ($comments_about_you as $comment) {
                echo "<h2 style=\"color:white\">{$comment->course_name}</h2><br>";
                echo "<p class=\"text-primary\">{$comment->comment_text}</p><br>";
                echo "<p>Student: {$comment->student_name}</p><br><br>";
            }
        ?>
    </div>
<?php endif; ?>

    <h1 class="heading clr_white" align="left" style="padding-top: 15px; padding-bottom: 20px; font-weight: bold"> Skills </h1>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="list-group">
        <a href=" " class="list-group-item list-group-item-action active bg-light">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Programming language C++/C</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <div class="progress w-25" >
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
          
        </a>
        <a href=" " class="list-group-item list-group-item-action active bg-light">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Programming language Python/Ruby</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <div class="progress w-25" >
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
          </div>
          
        </a>
        <a href=" " class="list-group-item list-group-item-action active bg-light">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Markup language HTML/XHTML/XML</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <div class="progress w-25" >
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
          </div>
          
        </a>   
      </div>
    </div>   
</div>

    <h1 class="clr_white heading" align="left" style="font-weight: bold"> Portfolio </h1>
        <div class="mx-auto row" style="margin-top: 25px; padding-bottom: 150px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/ROaWII9.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto" style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>

            </div>
    </div>        
            
        </div>

    
        
    </div>
</div>


<!-- Профиль Studentа 3 -->
<div ng-show="active=='student_profile_3'" class="fade-in">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png');">
            <div class="col-md-9 mx-auto">
                <h1 class="heading clr_white" style="font-weight: bold"> Tasks </h1>
               
            </div>    
        </div>
        <div class="h-75 sidebar" style="" >
                <a href="" class="services" ng-click="active='student_profile_1'" title="Control Panel">
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/O3CYI3i.png'); background-size: 100% 100%" >
                        
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_2'" title="Profile"> 
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/vkCXTqb.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_3'" title="Task_list"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/V0jWmAe.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_4'" title="Rating">  
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/1YlNRAt.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_5'" title="Notifications"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/zJ8gaG1.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                 
        </div>
    <!-- Таблица сообщений -->
    <div class="col-md-9 mx-auto" style="padding-bottom: 520px">
        <?php $current_user_new_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'new'));
        $current_user_current_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'current'));
    $current_user_done_tasks = $model[5]->findAllByAttributes(array('student_name' => Yii::app()->user->name, 'task_status' => 'done'));
        ?>

        <h1 class="clr_white heading " style="padding-bottom: 25px; font-weight: bold"> Tasks </h1>
        <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home22" role="tab" aria-controls="nav-home22" aria-selected="false">New <span class="badge badge-danger badge-pill"><?php echo count($current_user_new_tasks);?></span></a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">Current <span class="badge badge-warning badge-pill"><?php echo count($current_user_current_tasks);?></span></a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact3" role="tab" aria-controls="nav-contact3" aria-selected="false">Done <span class="badge badge-success badge-pill"><?php echo count($current_user_done_tasks);?></span></a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <!-- New Tasks -->
      <div class="tab-pane fade show" id="nav-home22" role="tabpanel" aria-labelledby="nav-home-tab2">
            <div class="list-group">
            <?php 

                foreach ($current_user_new_tasks as $new_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action active\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$new_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$new_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>

       <!-- Current Tasks -->
      <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
            <div class="list-group">
                <?php 

                foreach ($current_user_current_tasks as $current_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$current_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$current_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>

       <!-- Done Tasks -->
      <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
            <div class="list-group">
                <?php 
                
                foreach ($current_user_done_tasks as $done_task) {
                echo "<a href=\"#\" class=\"list-group-item list-group-item-action\">
                <div class=\"d-flex w-100 justify-content-between\">
                  <h5 class=\"mb-1\">{$done_task->task_header}</h5>
                  <small>3 days ago</small>
                </div>
                <p class=\"mb-1\">{$done_task->subtasks}</p>
              </a>"; }

            ?>
            </div>
      </div>
    </div>
   
    </div>
    
    <?php if($current_user->isMentor != '1'): ?>
      <div class="container" style="padding-bottom: 100px">

   <h1 style="color: white" class="text-center col-9 mx-auto">Send a report about course</h1>
        <div class="form col-9 mx-auto">
        <?php $form=$this->beginWidget('CActiveForm', array(
           'id'=>'вфывыф',
           'enableAjaxValidation'=> false,
           'enableClientValidation'=>true,
           'clientOptions'=>array(
               'validateOnSubmit'=>true,
           ),
           )); ?>

                          <div class="row">
                             <?php echo $form->labelEx($model[3],'course_name', array('style' => 'color: #ED088D', 'label' => 'Course name')); ?>
                             <?php echo $form->textField($model[3],'course_name', array()); ?>
                             <?php echo $form->error($model[3],'course_name'); ?>
                          </div>

                          <div class="row">
                             <?php echo $form->labelEx($model[3],'mentor_name', array('style' => 'color: #ED088D', 'label' => 'Mentor login')); ?>
                             <?php echo $form->textField($model[3],'mentor_name', array()); ?>
                             <?php echo $form->error($model[3],'mentor_name'); ?>
                          </div>

                          <div class="row">
                             <?php echo $form->labelEx($model[3],'comment_text', array('style' => 'color: #ED088D', 'label' => 'Text')); ?>
                             <?php echo $form->textArea($model[3],'comment_text', array('rows' => '6')); ?>
                             <?php echo $form->error($model[3],'comment_text'); ?>
                          </div>
                          <br>


                          <div class="row buttons">
                             <?php echo CHtml::submitButton('SEND', array('class' => 'btn btn-primary')); ?>
                          </div>
                         
                 <?php $this->endWidget(); ?>
        </div>
  </div>
<?php endif; ?>

</div>  
</div>

<!-- Профиль Studentа 4 -->
<div ng-show="active=='student_profile_4'" class="fade-in">
    <div class="d-flex">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png');">
            <div class="col-md-9 mx-auto">
                <h1 class="heading clr_white" style="font-weight: bold"> Students rankings </h1>
                
            </div>    
        </div>
        
    </div>
    <!-- Таблица сообщений -->
        <div class="h-75 sidebar" >
                <a href="" class="services" ng-click="active='student_profile_1'" title="Control Panel">
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/O3CYI3i.png'); background-size: 100% 100%" >
                        
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_2'" title="Profile"> 
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/vkCXTqb.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_3'" title="Task_list"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/V0jWmAe.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_4'" title="Rating">  
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/1YlNRAt.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_5'" title="Notifications"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/zJ8gaG1.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                 
        </div>
    <div class="col-md-9 mx-auto" style="padding-bottom: 550px; padding-top: 25px">

        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="clr_white">Student</th>
                <th class="clr_white">Status</th>
                <th class="clr_white">Profession</th>
                <th class="clr_white">Hours</th>
                <th class="clr_white">Mentor</th>
                <th class="clr_white">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $students_array = $model[1]->findAllByAttributes(array('isMentor' => null));?>


            <?php foreach ($students_array as $student) {
                echo "<td>{$student->name} {$student->surname}</td>
                <td>Active</td>
                <td>{$student->profession}</td>
                <td>{$student->hours}</td>
                <td>{$student->mentor_name}</td>
                <td>...</td>
            </tr>"; } ?>
            
            

            
        </tbody>
        <tfoot>
            <tr>
                <th class="clr_white">Name</th>
                <th class="clr_white">Position</th>
                <th class="clr_white">Office</th>
            </tr>
        </tfoot>
    </table>
    </div>

</div>
</div>

<!-- Профиль Studentа 5 -->
<div ng-show="active=='student_profile_5'" class="fade-in">
    <div class="d-flex">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png');">
            <div class="col-md-9 mx-auto">
                <h1 class="heading clr_white" style="font-weight: bold"> Notifications </h1>
                
            </div>    
        </div>
        
    </div>
    <!-- Боковая панель -->
        <div class="h-75 sidebar" style="" >
                <a href="" class="services" ng-click="active='student_profile_1'" title="Control Panel">
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/O3CYI3i.png'); background-size: 100% 100%" >
                        
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_2'" title="Profile"> 
                  <div class="mx-auto " style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/vkCXTqb.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_3'" title="Task_list"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/V0jWmAe.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_4'" title="Rating">  
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/1YlNRAt.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                <a href="" class="services" ng-click="active='student_profile_5'" title="Notifications"> 
                  <div class="mx-auto" style="width: 90px; height: 90px; margin-top: 15px; background-image: url('https://i.imgur.com/zJ8gaG1.png'); background-size: 100% 100%">
                    
                  </div>
                </a>  
                 
        </div>
    <!-- Таблица сообщений -->
    <div class="col-md-9 mx-auto" style="border-radius: 50px; padding-bottom: 300px">

        <h1 class="clr_white heading" style="font-weight: bold; padding-top: 30px; padding-bottom: 30px">Notifications</h1>
        <table id="example2" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Text</th>
                <th>Date</th>
                <th>Sender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Subject</td>
                <td>Text</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>Text text text text text ...</td>
                <td>5.05.2021</td>
                <td>Иванов Иван</td>
                <td>...</td>
            </tr>

            
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </tfoot>
    </table>
    </div>

</div> 
</div>

<!-- Mentor profile -->
<div ng-show="active=='mentor_profile'">
<div class="wrapper fade-in">
    <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('https://i.imgur.com/XQgwfEe.png'); z-index: 1">
        <div class="col-md-9 mx-auto">
            <h1 class="heading clr_white" style="font-weight: bold"> Mentor profile </h1>    
        </div>
    </div>
    <div class=" profile-content">
        <div class="container">
            <div class="owner">     
                <img src="https://i.imgur.com/CERWXSK.png" alt="" class="img-circle img-no-padding img-responsive" style="height: 340px; width: 340px; margin-top: 40px">
                <div class="name">
                    <h1 style="margin-top: 4px" class="heading"> Игорь Перчаткин </h1>
                    <h3 style="margin-top: 6px" class="description clr_white">Designer UI/UX</h3>
                </div>
                <div class="row mx-auto col-md-4" style="margin-top: 20px">
                    
                        <img src="https://i.imgur.com/mJzEWWt.png" style="height:70px; width: 70px;" class="img-circle img-responsive img-no-padding mx-auto">
                    
                    
                        <img src="https://i.imgur.com/DDFV4Ga.png" style="height:70px; width: 70px" class="img-circle img-responsive img-no-padding mx-auto">
                   
                    
                        <img src="https://i.imgur.com/z5Di3d7.png" style="height:70px; width: 70px" class="img-circle img-responsive img-no-padding mx-auto">
                    
                    
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Adobe_After_Effects_CC_icon.svg/1200px-Adobe_After_Effects_CC_icon.svg.png" style="height:70px; width: 70px" class="img-circle img-responsive img-no-padding mx-auto">
                    
                </div>
                <div class="text-center mx-auto col-md-8" style="margin-top: 20px">
                    <p class="clr_white" style="font-size: 20px"> I love making the world a better place, children and most of all my work! I am mainly engaged in creative projects, like Art House. The motto for life ... it is not, but my glass is always half full!  </p>
                </div>
                <div class="mx-auto col-md-12" style="padding-top: 50px">
                    <div class="col-md-8 mx-auto"> 
                        <ul class="nav nav-tabs" id="product" role="tablist">
                          <li class="nav-item mx-auto">
                            <a class=" active clr_white" id="description-tab" data-toggle="tab" href="#description1" role="tab" aria-controls="description1" aria-selected="true">Work experience</a>
                          </li> 
                          <li class="nav-item mx-auto">
                            <a class=" clr_white" id="home-tab" data-toggle="tab" href="#home7" role="tab" aria-controls="home7" aria-selected="false">Reports</a>
                          </li>
                        </ul>
                    </div>    
                    <div class="tab-content" id="product-content" style="margin-top: 60px">
                      <div class="tab-pane fade show active" id="description1" role="tabpanel" aria-labelledby="description-tab">
                        <div class="mx-auto col-md-12 " style="">
                            <div class="mx-auto col-md-6 row bg-dark " style="height: 100px; border-radius: 30px; border-width: 2px; border-style: solid; border-color: white; ">
                                <div class="col-md-3 " style="height: 90px; padding: 0px">
                                    <img src="https://openthread.google.cn/images/ot-contrib-google.png" style="padding: 0px; margin-top: 13px" class="col-12">
                                </div>
                                <div class="col-md-9 " style="height: 90px; text-align: left">
                                    <h2 style="margin-top: 3px; font-size: 24px; font-weight: bold;" class="clr_white"> Designer </h2>
                                    <p style="font-size: 19px; " class="clr_white"> Google </p>
                                    <p style="font-size: 17px; " class="clr_white"> From September 2018 . 32 months </p>
                                </div>
                            </div>

                            <div class="mx-auto col-md-6 row bg-dark " style="height: 100px; border-radius: 30px; border-width: 2px; border-style: solid; border-color: white; margin-top: 30px">
                                <div class="col-md-3 " style="height: 90px; padding: 0px">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1024px-HP_logo_2012.svg.png" style="padding: 0px; margin-top: 7px" class="col-8 mx-auto">
                                </div>
                                <div class="col-md-9 " style="height: 90px; text-align: left">
                                    <h2 style="margin-top: 3px; font-size: 24px; font-weight: bold;" class="clr_white"> Главный Designer </h2>
                                    <p style="font-size: 19px; " class="clr_white"> HP </p>
                                    <p style="font-size: 17px; " class="clr_white"> January 2017 - June 2018. </p>
                                </div>
                            </div>

                            <h1 class="clr_white heading" align="center" style="font-weight: bold"> Portfolio </h1>
        <div class="mx-auto row" style="margin-top: 25px; padding-bottom: 150px">
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/ROaWII9.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto" style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/gfGGrIM.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto" style="height: 290px">
                    <div class="col-md-12 mx-auto " style="height: 290px; border-radius: 20px; background-image: url('https://i.imgur.com/JDVH6Ot.png');">
                        <h1 style="font-size: 26px; font-family: 'Raleway'; font-weight: bold; padding-top: 15px" class="clr_black"> Web: KidCode online service for children </h1>
                        <p class="clr_black" style="font-size: 17px; padding-top: 9px" align="left"> The site teaches Digital literacy, which is especially important in the period of an increase in fraudsters on the Internet </p>

                        <div class="w-100 row ">
                            <div class="col-md-3" style="height:60px; padding-right: 0px">
                                <img src="https://i.imgur.com/ab58dDp.png" class="img-circle img-no-padding img-responsive">
                            </div>
                            <div class="col-md-9" style="height: 60px; padding-left: 0px; padding-right: 0px">
                                <p class="clr_black" style="font-size: 16px"> Mentor: Андрей Костюшко </p>
                                <p class="clr_violet" style="font-size: 15px; line-height: 8px"> Reputation: 3621 stars </p>

                            </div>
                        </div>
                        <p class="text-dark" style="font-style: italic;"> Added 14 days ago </p>
                    </div>
                </div>

            </div>

                            
                        </div>
                      </div>
                      <div class="tab-pane fade" id="home7" role="tabpanel" aria-labelledby="home-tab">
                          <div class="col-md-10 mx-auto">
                              <h1 class="title_custom " style="text-align: left; font-size: 22px; "> Great Mentor, thank you! </h1>
                              <p style="text-align: left; margin-top: 15px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non
                              proident, sunt in  <a class="text-primary read_more">id est laborum.</a> </p>
                              <div class="row ">
                                  
                              </div>
                          </div>

                          <div class="col-md-10 mx-auto">
                              <h1 class="title_custom " style="text-align: left; font-size: 22px; "> Great Mentor, thank you!</h1>
                              <p style="text-align: left; margin-top: 15px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non
                              proident, sunt in  <a class="text-primary read_more">id est laborum.</a> </p>
                              <div class="row ">
                                  
                              </div>
                          </div>

                          <div class="col-md-10 mx-auto">
                              <h1 class="title_custom " style="text-align: left; font-size: 22px; "> Great Mentor, thank you!</h1>
                              <p style="text-align: left; margin-top: 15px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non
                              proident, sunt in  <a class="text-primary read_more">id est laborum.</a> </p>
                              <div class="row ">
                                  
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>         
            
        </div>
        
    </div>
</div>

<div class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
  <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
</div>

<script type="text/javascript">
    $('#myTab a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    $('#myTab a[href="#profile"]').tab('show') // Select tab by name
    $('#myTab li:first-child a').tab('show') // Select first tab
    $('#myTab li:last-child a').tab('show') // Select last tab
    $('#myTab li:nth-child(3) a').tab('show') // Select third tab
</script>    
</div>

<!-- Покупка курса -->
<div ng-show="active=='course_order'" class="fade-in">
      <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4 img-rounded" src="https://cdn.discordapp.com/attachments/760372831946670104/840055983053340702/unknown.png" alt="" width="80px" height="">
    <h2 style="color: white">Checkout</h2>
    <p class="lead text-primary">To purchase a course, please fill out the order form below. In case of any mistake, we guarantee a full refund!</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">

        <!-- The main CSS file -->
        <style type="text/css" scoped>
            /*-------------------------
    Simple reset
--------------------------*/


*{
    margin:0;
    padding:0;
}


/*-------------------------
    General Styles
--------------------------*/


body{
    font:15px/1.3 'Open Sans', sans-serif;
    color: #5e5b64;
    text-align:center;
}

a, a:visited {
    outline:none;
    color:#389dc1;
}

a:hover{
    text-decoration:none;
}

section, footer, header, aside, nav{
    display: block;
}


/*-------------------------
    The order form
--------------------------*/


form{
    background-color: ;
    border-radius: 2px;
    box-shadow: 0 1px 1px #ccc;
    width: 400px;
    padding: 35px 60px;
    margin: 80px auto;
}

form h1{
    color:#fff;
    font-size:64px;
    font-family:'Cookie', cursive;
    font-weight: normal;
    line-height:1;
    text-shadow:0 3px 0 rgba(0,0,0,0.1);
}

form ul{
    list-style:none;
    color:#fff;
    font-size:15px;
    font-weight:bold;
    text-align: left;
    margin:20px 0 15px;
}

form ul li{
    padding:20px 30px;
    background-color:#e35885;
    margin-bottom:8px;
    /*box-shadow:0 1px 1px rgba(0,0,0,0.1);*/
    cursor:pointer;
}

form ul li span{
    float:right;
}

form ul li.active{
    background-color:#8ec16d;
}

div.total{
    /*border-top:1px solid rgba(255,255,255,0.5);*/
    padding:15px 30px;
    font-size:20px;
    font-weight:bold;
    text-align: left;
    color:#fff;
}

div.total span{
    float:right;
}
        </style>

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <!-- Declare a new AngularJS app and associate the controller -->
    <div ng-app ng-controller="OrderFormController">

        <form>

          <!-- <h1 class="my_h1" style="opacity: 0">500</h1> -->
          <h3 class="" style="color: #ED088D">Calculate the amount</h3>

            <ul>
                <!-- Loop through the services array, assign a click handler, and set or
                    remove the "active" css class if needed -->
                <li ng-repeat="service in services" ng-click="toggleActive(service)" ng-class="{active:service.active}" class="my_li321">
                    <!-- Notice the use of the currency filter, it will format the price -->
                    {{service.name}} <span class="my_spanya">{{service.price | currency}}</span>
                </li>
            </ul>

            <div class="total">
                <!-- Calculate the total price of all chosen services. Format it as currency. -->
                Total: <span>{{total() | currency}}</span>
            </div>

        </form>

        <!-- Include AngularJS from Google's CDN -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script> -->
        <!-- <script src="script.js"></script> -->
    </div>




    </div>
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>

        <h4 class="mb-3" style="color: white">Payment</h4>

        <select class="sel1" name="select" style="border-radius: 3px"> <!--Supplement an id here instead of using 'name'-->
              <option value="0" selected>Choose a tarif</option>
              <option value="400">Tar 1</option>
              <option value="500">Tarif 2</option>
        </select>

        <select class="sel2" name="select" style="border-radius: 3px"> <!--Supplement an id here instead of using 'name'-->
              <option value="0" selected>Choose a bonus</option>
              <option value="100">Bonus 1</option>
              <option value="200">Bonus 2</option>
        </select>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit" style="color:white">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit" style="color:white">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal" style="color:white">PayPal</label>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name" style="color:white">Card owner full name</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted" style="color:white">You can see it on your card</small>
            <div class="invalid-feedback" style="color:white">
              Field cannot be empty
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number" style="color:white">Card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
             Field cannot be empty
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration" style="color:white">Expiration date</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Field cannot be empty
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv" style="color:white">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Field cannot be empty
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">ORDER</button>
      </form>
    </div>
  </div>


</div>     
</div>

<script type="text/javascript">
    function OrderFormController($scope){

    // Define the model properties. The view will loop
    // through the services array and genreate a li
    // element for every one of its items.
    let sel1 = document.querySelector(".sel1");
    let sel2 = document.querySelector(".sel2");

    $scope.services = [
        {
            name: 'Chosen Tarif',
            price: parseInt(sel1.value),
            // price: parseInt(document.querySelector(".my_h1").innerHTML),
            active:false
        },{
            name: 'Chosen Bonus',
            price: parseInt(sel2.value),
            active:false
        }
    ];

    sel1.onchange = function() {
            $scope.services = [
        {
            name: 'Chosen Tarif',
            price: parseInt(sel1.value),
            // price: parseInt(document.querySelector(".my_h1").innerHTML),
            active:true
        },{
            name: 'Chosen Bonus',
            price: parseInt(sel2.value),
            active:true
        }
    ]; 
    }


    sel2.onchange = function() {
            $scope.services = [
        {
            name: 'Chosen Tarif',
            price: parseInt(sel1.value),
            // price: parseInt(document.querySelector(".my_h1").innerHTML),
            active:true
        },{
            name: 'Chosen Bonus',
            price: parseInt(sel2.value),
            active:true
        }
    ]; 
    }


    $scope.toggleActive = function(s){
        s.active = !s.active;
    };

    // Helper method for calculating the total price

    $scope.total = function(){

        var total = 0;

        // Use the angular forEach helper method to
        // loop through the services array:

        angular.forEach($scope.services, function(s){
            if (s.active){
                total+= s.price;
            }
        });

        return total;
    };
}

</script>


  <!-- Футер -->
  <footer class=" border-top" style="background-color: #4A2CFF; background-image: url('https://cdn.discordapp.com/attachments/760372831946670104/840025843400835072/footer_hand.png'), background-size: 100% 100%;">
    
    <div class="row" style="padding-left: 150px; padding-right: 150px; padding-top: 50px; padding-bottom: 50px">
       <div class="col-6 col-md" style="background-color: ; padding-top: -50px; margin-top: -25px">
        <h3 style="color: white; font-weight: 650">Praxis</h3>
        <p style="color: white">Studying tools, programming and design technologies, teamwork under the guidance of a professional.</p>
        <br>
        <a href="https://www.instagram.com/mpityakutia/?hl=ru" class="mr-2"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697269158182922/insta_logo.png" width="25px"></a>
        <a href="https://twitter.com/" class="mr-2"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697265635622922/twitter_logo.png" width="25px"></a>
        <a href="https://www.youtube.com/channel/UCXgM6C_NV33xWk3Ke8GucqA" class="mr-2"><img src="https://cdn.discordapp.com/attachments/760372831946670104/839697266490605588/youtube_logo.png" width="25px"></a>
      </div>
      <div class="col-6 col-md">
        <h5 style="color: white; font-weight: 600">Fast links</h5>
        <ul class="list-unstyled text-small">
          <li><a style="color: white;"class="" href="">Courses</a></li>
          <li><a style="color: white" class="" href="">Team</a></li>
          <li><a style="color: white" class="" href="">Events</a></li>
          <li><a style="color: white" class="" href="">Blog</a></li>
          <li><a style="color: white" class="" href="" ng-click="active='student_profile_2'">Profile</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 style="color: white; font-weight: 600" >Services</h5>
        <ul class="list-unstyled text-small">
          <li><a style="color: white" class="" href="">UX/UI design</a></li>
          <li><a style="color: white" class="" href="">Software development</a></li>
          <li><a style="color: white" class="" href="">Web-development</a></li>
          <li><a style="color: white" class="" href="">Quality assurance</a></li>
          <li><a style="color: white" class="" href="">Machine learning</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 style="color: white; font-weight: 600">Contact us</h5>
        <ul class="list-unstyled text-small">
          <li><a style="color: white" class="" href=" "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg> hello@praxis.co</a></li>
          <li><a style="color: white" class="" href=" "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg> +7 924 599-61-00</a></li>
          <li><a style="color: white" class="" href=" "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> Lenin St., 1, Yakutsk, Republic of Sakha (Yakutia) 677000</a></li>
        </ul>
      </div>
    </div>

    <div class="row" style="padding-left: 150px; padding-right: 150px; padding-bottom: 50px;">
        <div class="col-6">
            <p class="text-light">© 2021 Praxis UI/UX Design. All rights reserved</p>
        </div>
        <div class="col-6">
            <a style="color: white" class="" href=" ">Terms & Policy   |   </a>
            <a style="color: white" class="" href=" ">Confidentiality  |   </a>
            <a style="color: white" class="" href=" ">Site map   |   </a>
            <a style="color: white" class="" href="http://vlacwarq.zzz.com.ua/mpit-backend-2021/index.php/site/index">Switch to Russian</a>
        </div>
    </div>
  </footer>


<!-- Для переключения цвета -->
<script type="text/javascript" src="main.js"></script>


<!-- ТОСТ СООБЩЕНИЕ исчезающее (начало) -->
<script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $('.toast').toast('show');
      });
    });
</script>
<!-- ТОСТ СООБЩЕНИЕ исчезающее (конец) -->


<!-- ТОСТ СООБЩЕНИЕ неисчезающее (начало) -->
<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>
<!-- ТОСТ СООБЩЕНИЕ неисчезающее (конец) -->



        <!-- Include AngularJS from Google's CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular-route.js"></script>
    </body>
</html>

<script type="text/javascript">
   let current_language = "eng";

   let div = document.querySelector(".div");
   let h1 = document.querySelector(".h1");
   let button = document.querySelector(".button");

   button.onclick = function() {
      if(current_language == 'eng') {
      div.innerHTML = "Теперь Text русский!";
      h1.innerHTML = "Теперь Text русский!";
      button.innerHTML = "Перейти на английский";
      current_language = "rus";
      } else {
      div.innerHTML = "English text";
      h1.innerHTML = "English text";
      button.innerHTML = "Switch to Russian";
      current_language = "eng";
      }
   }
</script>

<script type="text/javascript">
//  it('should only change url when only ng-href', function() {
//   element(by.class('active')).clear();
//   element(by.class('active')).sendKeys('6');
//   expect(element(by.id('test')).getAttribute('href')).toMatch(/\/6$/);

//   element(by.id('test')).click();

//   // At this point, we navigate away from an AngularJS page, so we need
//   // to use browser.driver to get the base webdriver.
//   browser.wait(function() {
//     return browser.driver.getCurrentUrl().then(function(url) {
//       return url.match(/\/6$/);
//     });
//   }, 5000, 'page should navigate to /6');
// });
// var questApp = angular.module('myApp', ["ngRoute"])
//     .config(function($routeProvider){
//         $routeProvider.when('http://yii1:83/mpit-backend-2021-prod/index.php/site/index?username=sardaana#lk',
//         {
//             //redirectTo: '/question'
//              templateUrl:document.querySelector(".wrapper"),
//             //controller:'QuestionController'
//         });
//         $routeProvider.when('/answer',
//         {
//             templateUrl:'views/answer.html',
//             controller:'AnswerController'
//         });
//         $routeProvider.otherwise({redirectTo: '/question'});
// });
</script>


<!-- <script src="runtime.0e49e2b53282f40c8925.js" defer=""></script><script src="polyfills-es5.6de3ffc5a534e1ffa087.js" nomodule="" defer=""></script><script src="polyfills.e9de5bb52813d06c576e.js" defer=""></script><script src="main.20e75e918f55950265ea.js" defer=""></script> -->
</html>


<!-- <script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/main.6a9ef1c6ae4a3d8254a4.js" defer=""></script> -->
<script type="text/javascript" src="https://mylessons.acwarq.repl.co/hackathon/main.d28e309b75c71811f58e.js"></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/polyfills.4bb7e220761538520228.js" defer=""></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/polyfills-es5.342bb7c4ff0aaf4eee81.js" defer=""></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/runtime.0e49e2b53282f40c8925.js" defer=""></script> 
<!-- <script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/main.0822b585f48cde11506a.js" defer=""></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/polyfills.4bb7e220761538520228.js" defer=""></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/polyfills-es5.342bb7c4ff0aaf4eee81.js" defer=""></script>
<script type="text/javascript" src="https://mylessons.mantelpiecesb.repl.co/vlad/runtime.0e49e2b53282f40c8925.js" defer=""></script> -->


        <!-- ========================= JS here ========================= -->
        <!-- <script type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/wow.min.js"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/imagesloaded.min.js"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/main.js"></script> -->
<!-- ========================= JS here ========================= -->
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/wow.min.js"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/imagesloaded.min.js"></script>
        <script src="https://daanaea.github.io/IT-school/РЛИ/assets/js/main.js"></script>






<!-- СКРИПТ ДЛЯ РАБОТЫ ТАБЛИЦЫ (через src не пашет) -->
<script>
    
/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */
( function( global, factory ) {

    "use strict";

    if ( typeof module === "object" && typeof module.exports === "object" ) {

        // For CommonJS and CommonJS-like environments where a proper `window`
        // is present, execute the factory and get jQuery.
        // For environments that do not have a `window` with a `document`
        // (such as Node.js), expose a factory as module.exports.
        // This accentuates the need for the creation of a real `window`.
        // e.g. var jQuery = require("jquery")(window);
        // See ticket #14549 for more info.
        module.exports = global.document ?
            factory( global, true ) :
            function( w ) {
                if ( !w.document ) {
                    throw new Error( "jQuery requires a window with a document" );
                }
                return factory( w );
            };
    } else {
        factory( global );
    }

// Pass this if window is not defined yet
} )( typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
"use strict";

var arr = [];

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var flat = arr.flat ? function( array ) {
    return arr.flat.call( array );
} : function( array ) {
    return arr.concat.apply( [], array );
};


var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

      // Support: Chrome <=57, Firefox <=52
      // In some browsers, typeof returns "function" for HTML <object> elements
      // (i.e., `typeof document.createElement( "object" ) === "function"`).
      // We don't want to classify *any* DOM node as a function.
      return typeof obj === "function" && typeof obj.nodeType !== "number";
  };


var isWindow = function isWindow( obj ) {
        return obj != null && obj === obj.window;
    };


var document = window.document;



    var preservedScriptAttributes = {
        type: true,
        src: true,
        nonce: true,
        noModule: true
    };

    function DOMEval( code, node, doc ) {
        doc = doc || document;

        var i, val,
            script = doc.createElement( "script" );

        script.text = code;
        if ( node ) {
            for ( i in preservedScriptAttributes ) {

                // Support: Firefox 64+, Edge 18+
                // Some browsers don't support the "nonce" property on scripts.
                // On the other hand, just using `getAttribute` is not enough as
                // the `nonce` attribute is reset to an empty string whenever it
                // becomes browsing-context connected.
                // See https://github.com/whatwg/html/issues/2369
                // See https://html.spec.whatwg.org/#nonce-attributes
                // The `node.getAttribute` check was added for the sake of
                // `jQuery.globalEval` so that it can fake a nonce-containing node
                // via an object.
                val = node[ i ] || node.getAttribute && node.getAttribute( i );
                if ( val ) {
                    script.setAttribute( i, val );
                }
            }
        }
        doc.head.appendChild( script ).parentNode.removeChild( script );
    }


function toType( obj ) {
    if ( obj == null ) {
        return obj + "";
    }

    // Support: Android <=2.3 only (functionish RegExp)
    return typeof obj === "object" || typeof obj === "function" ?
        class2type[ toString.call( obj ) ] || "object" :
        typeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
    version = "3.5.1",

    // Define a local copy of jQuery
    jQuery = function( selector, context ) {

        // The jQuery object is actually just the init constructor 'enhanced'
        // Need init if jQuery is called (just allow error to be thrown if not included)
        return new jQuery.fn.init( selector, context );
    };

jQuery.fn = jQuery.prototype = {

    // The current version of jQuery being used
    jquery: version,

    constructor: jQuery,

    // The default length of a jQuery object is 0
    length: 0,

    toArray: function() {
        return slice.call( this );
    },

    // Get the Nth element in the matched element set OR
    // Get the whole matched element set as a clean array
    get: function( num ) {

        // Return all the elements in a clean array
        if ( num == null ) {
            return slice.call( this );
        }

        // Return just the one element from the set
        return num < 0 ? this[ num + this.length ] : this[ num ];
    },

    // Take an array of elements and push it onto the stack
    // (returning the new matched element set)
    pushStack: function( elems ) {

        // Build a new jQuery matched element set
        var ret = jQuery.merge( this.constructor(), elems );

        // Add the old object onto the stack (as a reference)
        ret.prevObject = this;

        // Return the newly-formed element set
        return ret;
    },

    // Execute a callback for every element in the matched set.
    each: function( callback ) {
        return jQuery.each( this, callback );
    },

    map: function( callback ) {
        return this.pushStack( jQuery.map( this, function( elem, i ) {
            return callback.call( elem, i, elem );
        } ) );
    },

    slice: function() {
        return this.pushStack( slice.apply( this, arguments ) );
    },

    first: function() {
        return this.eq( 0 );
    },

    last: function() {
        return this.eq( -1 );
    },

    even: function() {
        return this.pushStack( jQuery.grep( this, function( _elem, i ) {
            return ( i + 1 ) % 2;
        } ) );
    },

    odd: function() {
        return this.pushStack( jQuery.grep( this, function( _elem, i ) {
            return i % 2;
        } ) );
    },

    eq: function( i ) {
        var len = this.length,
            j = +i + ( i < 0 ? len : 0 );
        return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
    },

    end: function() {
        return this.prevObject || this.constructor();
    },

    // For internal use only.
    // Behaves like an Array's method, not like a jQuery method.
    push: push,
    sort: arr.sort,
    splice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
    var options, name, src, copy, copyIsArray, clone,
        target = arguments[ 0 ] || {},
        i = 1,
        length = arguments.length,
        deep = false;

    // Handle a deep copy situation
    if ( typeof target === "boolean" ) {
        deep = target;

        // Skip the boolean and the target
        target = arguments[ i ] || {};
        i++;
    }

    // Handle case when target is a string or something (possible in deep copy)
    if ( typeof target !== "object" && !isFunction( target ) ) {
        target = {};
    }

    // Extend jQuery itself if only one argument is passed
    if ( i === length ) {
        target = this;
        i--;
    }

    for ( ; i < length; i++ ) {

        // Only deal with non-null/undefined values
        if ( ( options = arguments[ i ] ) != null ) {

            // Extend the base object
            for ( name in options ) {
                copy = options[ name ];

                // Prevent Object.prototype pollution
                // Prevent never-ending loop
                if ( name === "__proto__" || target === copy ) {
                    continue;
                }

                // Recurse if we're merging plain objects or arrays
                if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
                    ( copyIsArray = Array.isArray( copy ) ) ) ) {
                    src = target[ name ];

                    // Ensure proper type for the source value
                    if ( copyIsArray && !Array.isArray( src ) ) {
                        clone = [];
                    } else if ( !copyIsArray && !jQuery.isPlainObject( src ) ) {
                        clone = {};
                    } else {
                        clone = src;
                    }
                    copyIsArray = false;

                    // Never move original objects, clone them
                    target[ name ] = jQuery.extend( deep, clone, copy );

                // Don't bring in undefined values
                } else if ( copy !== undefined ) {
                    target[ name ] = copy;
                }
            }
        }
    }

    // Return the modified object
    return target;
};

jQuery.extend( {

    // Unique for each copy of jQuery on the page
    expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

    // Assume jQuery is ready without the ready module
    isReady: true,

    error: function( msg ) {
        throw new Error( msg );
    },

    noop: function() {},

    isPlainObject: function( obj ) {
        var proto, Ctor;

        // Detect obvious negatives
        // Use toString instead of jQuery.type to catch host objects
        if ( !obj || toString.call( obj ) !== "[object Object]" ) {
            return false;
        }

        proto = getProto( obj );

        // Objects with no prototype (e.g., `Object.create( null )`) are plain
        if ( !proto ) {
            return true;
        }

        // Objects with prototype are plain iff they were constructed by a global Object function
        Ctor = hasOwn.call( proto, "constructor" ) && proto.constructor;
        return typeof Ctor === "function" && fnToString.call( Ctor ) === ObjectFunctionString;
    },

    isEmptyObject: function( obj ) {
        var name;

        for ( name in obj ) {
            return false;
        }
        return true;
    },

    // Evaluates a script in a provided context; falls back to the global one
    // if not specified.
    globalEval: function( code, options, doc ) {
        DOMEval( code, { nonce: options && options.nonce }, doc );
    },

    each: function( obj, callback ) {
        var length, i = 0;

        if ( isArrayLike( obj ) ) {
            length = obj.length;
            for ( ; i < length; i++ ) {
                if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
                    break;
                }
            }
        } else {
            for ( i in obj ) {
                if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
                    break;
                }
            }
        }

        return obj;
    },

    // results is for internal usage only
    makeArray: function( arr, results ) {
        var ret = results || [];

        if ( arr != null ) {
            if ( isArrayLike( Object( arr ) ) ) {
                jQuery.merge( ret,
                    typeof arr === "string" ?
                    [ arr ] : arr
                );
            } else {
                push.call( ret, arr );
            }
        }

        return ret;
    },

    inArray: function( elem, arr, i ) {
        return arr == null ? -1 : indexOf.call( arr, elem, i );
    },

    // Support: Android <=4.0 only, PhantomJS 1 only
    // push.apply(_, arraylike) throws on ancient WebKit
    merge: function( first, second ) {
        var len = +second.length,
            j = 0,
            i = first.length;

        for ( ; j < len; j++ ) {
            first[ i++ ] = second[ j ];
        }

        first.length = i;

        return first;
    },

    grep: function( elems, callback, invert ) {
        var callbackInverse,
            matches = [],
            i = 0,
            length = elems.length,
            callbackExpect = !invert;

        // Go through the array, only saving the items
        // that pass the validator function
        for ( ; i < length; i++ ) {
            callbackInverse = !callback( elems[ i ], i );
            if ( callbackInverse !== callbackExpect ) {
                matches.push( elems[ i ] );
            }
        }

        return matches;
    },

    // arg is for internal usage only
    map: function( elems, callback, arg ) {
        var length, value,
            i = 0,
            ret = [];

        // Go through the array, translating each of the items to their new values
        if ( isArrayLike( elems ) ) {
            length = elems.length;
            for ( ; i < length; i++ ) {
                value = callback( elems[ i ], i, arg );

                if ( value != null ) {
                    ret.push( value );
                }
            }

        // Go through every key on the object,
        } else {
            for ( i in elems ) {
                value = callback( elems[ i ], i, arg );

                if ( value != null ) {
                    ret.push( value );
                }
            }
        }

        // Flatten any nested arrays
        return flat( ret );
    },

    // A global GUID counter for objects
    guid: 1,

    // jQuery.support is not used in Core but other projects attach their
    // properties to it so it needs to exist.
    support: support
} );

if ( typeof Symbol === "function" ) {
    jQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
function( _i, name ) {
    class2type[ "[object " + name + "]" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

    // Support: real iOS 8.2 only (not reproducible in simulator)
    // `in` check used to prevent JIT error (gh-2145)
    // hasOwn isn't used here due to false negatives
    // regarding Nodelist length in IE
    var length = !!obj && "length" in obj && obj.length,
        type = toType( obj );

    if ( isFunction( obj ) || isWindow( obj ) ) {
        return false;
    }

    return type === "array" || length === 0 ||
        typeof length === "number" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.3.5
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://js.foundation/
 *
 * Date: 2020-03-14
 */
( function( window ) {
var i,
    support,
    Expr,
    getText,
    isXML,
    tokenize,
    compile,
    select,
    outermostContext,
    sortInput,
    hasDuplicate,

    // Local document vars
    setDocument,
    document,
    docElem,
    documentIsHTML,
    rbuggyQSA,
    rbuggyMatches,
    matches,
    contains,

    // Instance-specific data
    expando = "sizzle" + 1 * new Date(),
    preferredDoc = window.document,
    dirruns = 0,
    done = 0,
    classCache = createCache(),
    tokenCache = createCache(),
    compilerCache = createCache(),
    nonnativeSelectorCache = createCache(),
    sortOrder = function( a, b ) {
        if ( a === b ) {
            hasDuplicate = true;
        }
        return 0;
    },

    // Instance methods
    hasOwn = ( {} ).hasOwnProperty,
    arr = [],
    pop = arr.pop,
    pushNative = arr.push,
    push = arr.push,
    slice = arr.slice,

    // Use a stripped-down indexOf as it's faster than native
    // https://jsperf.com/thor-indexof-vs-for/5
    indexOf = function( list, elem ) {
        var i = 0,
            len = list.length;
        for ( ; i < len; i++ ) {
            if ( list[ i ] === elem ) {
                return i;
            }
        }
        return -1;
    },

    booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|" +
        "ismap|loop|multiple|open|readonly|required|scoped",

    // Regular expressions

    // http://www.w3.org/TR/css3-selectors/#whitespace
    whitespace = "[\\x20\\t\\r\\n\\f]",

    // https://www.w3.org/TR/css-syntax-3/#ident-token-diagram
    identifier = "(?:\\\\[\\da-fA-F]{1,6}" + whitespace +
        "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",

    // Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
    attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +

        // Operator (capture 2)
        "*([*^$|!~]?=)" + whitespace +

        // "Attribute values must be CSS identifiers [capture 5]
        // or strings [capture 3 or capture 4]"
        "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" +
        whitespace + "*\\]",

    pseudos = ":(" + identifier + ")(?:\\((" +

        // To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
        // 1. quoted (capture 3; capture 4 or capture 5)
        "('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +

        // 2. simple (capture 6)
        "((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +

        // 3. anything else (capture 2)
        ".*" +
        ")\\)|)",

    // Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
    rwhitespace = new RegExp( whitespace + "+", "g" ),
    rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" +
        whitespace + "+$", "g" ),

    rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
    rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace +
        "*" ),
    rdescend = new RegExp( whitespace + "|>" ),

    rpseudo = new RegExp( pseudos ),
    ridentifier = new RegExp( "^" + identifier + "$" ),

    matchExpr = {
        "ID": new RegExp( "^#(" + identifier + ")" ),
        "CLASS": new RegExp( "^\\.(" + identifier + ")" ),
        "TAG": new RegExp( "^(" + identifier + "|[*])" ),
        "ATTR": new RegExp( "^" + attributes ),
        "PSEUDO": new RegExp( "^" + pseudos ),
        "CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
            whitespace + "*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" +
            whitespace + "*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
        "bool": new RegExp( "^(?:" + booleans + ")$", "i" ),

        // For use in libraries implementing .is()
        // We use this for POS matching in `select`
        "needsContext": new RegExp( "^" + whitespace +
            "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + whitespace +
            "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
    },

    rhtml = /HTML$/i,
    rinputs = /^(?:input|select|textarea|button)$/i,
    rheader = /^h\d$/i,

    rnative = /^[^{]+\{\s*\[native \w/,

    // Easily-parseable/retrievable ID or TAG or CLASS selectors
    rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

    rsibling = /[+~]/,

    // CSS escapes
    // http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
    runescape = new RegExp( "\\\\[\\da-fA-F]{1,6}" + whitespace + "?|\\\\([^\\r\\n\\f])", "g" ),
    funescape = function( escape, nonHex ) {
        var high = "0x" + escape.slice( 1 ) - 0x10000;

        return nonHex ?

            // Strip the backslash prefix from a non-hex escape sequence
            nonHex :

            // Replace a hexadecimal escape sequence with the encoded Unicode code point
            // Support: IE <=11+
            // For values outside the Basic Multilingual Plane (BMP), manually construct a
            // surrogate pair
            high < 0 ?
                String.fromCharCode( high + 0x10000 ) :
                String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
    },

    // CSS string/identifier serialization
    // https://drafts.csswg.org/cssom/#common-serializing-idioms
    rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
    fcssescape = function( ch, asCodePoint ) {
        if ( asCodePoint ) {

            // U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
            if ( ch === "\0" ) {
                return "\uFFFD";
            }

            // Control characters and (dependent upon position) numbers get escaped as code points
            return ch.slice( 0, -1 ) + "\\" +
                ch.charCodeAt( ch.length - 1 ).toString( 16 ) + " ";
        }

        // Other potentially-special ASCII characters get backslash-escaped
        return "\\" + ch;
    },

    // Used for iframes
    // See setDocument()
    // Removing the function wrapper causes a "Permission Denied"
    // error in IE
    unloadHandler = function() {
        setDocument();
    },

    inDisabledFieldset = addCombinator(
        function( elem ) {
            return elem.disabled === true && elem.nodeName.toLowerCase() === "fieldset";
        },
        { dir: "parentNode", next: "legend" }
    );

// Optimize for push.apply( _, NodeList )
try {
    push.apply(
        ( arr = slice.call( preferredDoc.childNodes ) ),
        preferredDoc.childNodes
    );

    // Support: Android<4.0
    // Detect silently failing push.apply
    // eslint-disable-next-line no-unused-expressions
    arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
    push = { apply: arr.length ?

        // Leverage slice if possible
        function( target, els ) {
            pushNative.apply( target, slice.call( els ) );
        } :

        // Support: IE<9
        // Otherwise append directly
        function( target, els ) {
            var j = target.length,
                i = 0;

            // Can't trust NodeList.length
            while ( ( target[ j++ ] = els[ i++ ] ) ) {}
            target.length = j - 1;
        }
    };
}

function Sizzle( selector, context, results, seed ) {
    var m, i, elem, nid, match, groups, newSelector,
        newContext = context && context.ownerDocument,

        // nodeType defaults to 9, since context defaults to document
        nodeType = context ? context.nodeType : 9;

    results = results || [];

    // Return early from calls with invalid selector or context
    if ( typeof selector !== "string" || !selector ||
        nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

        return results;
    }

    // Try to shortcut find operations (as opposed to filters) in HTML documents
    if ( !seed ) {
        setDocument( context );
        context = context || document;

        if ( documentIsHTML ) {

            // If the selector is sufficiently simple, try using a "get*By*" DOM method
            // (excepting DocumentFragment context, where the methods don't exist)
            if ( nodeType !== 11 && ( match = rquickExpr.exec( selector ) ) ) {

                // ID selector
                if ( ( m = match[ 1 ] ) ) {

                    // Document context
                    if ( nodeType === 9 ) {
                        if ( ( elem = context.getElementById( m ) ) ) {

                            // Support: IE, Opera, Webkit
                            // TODO: identify versions
                            // getElementById can match elements by name instead of ID
                            if ( elem.id === m ) {
                                results.push( elem );
                                return results;
                            }
                        } else {
                            return results;
                        }

                    // Element context
                    } else {

                        // Support: IE, Opera, Webkit
                        // TODO: identify versions
                        // getElementById can match elements by name instead of ID
                        if ( newContext && ( elem = newContext.getElementById( m ) ) &&
                            contains( context, elem ) &&
                            elem.id === m ) {

                            results.push( elem );
                            return results;
                        }
                    }

                // Type selector
                } else if ( match[ 2 ] ) {
                    push.apply( results, context.getElementsByTagName( selector ) );
                    return results;

                // Class selector
                } else if ( ( m = match[ 3 ] ) && support.getElementsByClassName &&
                    context.getElementsByClassName ) {

                    push.apply( results, context.getElementsByClassName( m ) );
                    return results;
                }
            }

            // Take advantage of querySelectorAll
            if ( support.qsa &&
                !nonnativeSelectorCache[ selector + " " ] &&
                ( !rbuggyQSA || !rbuggyQSA.test( selector ) ) &&

                // Support: IE 8 only
                // Exclude object elements
                ( nodeType !== 1 || context.nodeName.toLowerCase() !== "object" ) ) {

                newSelector = selector;
                newContext = context;

                // qSA considers elements outside a scoping root when evaluating child or
                // descendant combinators, which is not what we want.
                // In such cases, we work around the behavior by prefixing every selector in the
                // list with an ID selector referencing the scope context.
                // The technique has to be used as well when a leading combinator is used
                // as such selectors are not recognized by querySelectorAll.
                // Thanks to Andrew Dupont for this technique.
                if ( nodeType === 1 &&
                    ( rdescend.test( selector ) || rcombinators.test( selector ) ) ) {

                    // Expand context for sibling selectors
                    newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
                        context;

                    // We can use :scope instead of the ID hack if the browser
                    // supports it & if we're not changing the context.
                    if ( newContext !== context || !support.scope ) {

                        // Capture the context ID, setting it first if necessary
                        if ( ( nid = context.getAttribute( "id" ) ) ) {
                            nid = nid.replace( rcssescape, fcssescape );
                        } else {
                            context.setAttribute( "id", ( nid = expando ) );
                        }
                    }

                    // Prefix every selector in the list
                    groups = tokenize( selector );
                    i = groups.length;
                    while ( i-- ) {
                        groups[ i ] = ( nid ? "#" + nid : ":scope" ) + " " +
                            toSelector( groups[ i ] );
                    }
                    newSelector = groups.join( "," );
                }

                try {
                    push.apply( results,
                        newContext.querySelectorAll( newSelector )
                    );
                    return results;
                } catch ( qsaError ) {
                    nonnativeSelectorCache( selector, true );
                } finally {
                    if ( nid === expando ) {
                        context.removeAttribute( "id" );
                    }
                }
            }
        }
    }

    // All others
    return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *  property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *  deleting the oldest entry
 */
function createCache() {
    var keys = [];

    function cache( key, value ) {

        // Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
        if ( keys.push( key + " " ) > Expr.cacheLength ) {

            // Only keep the most recent entries
            delete cache[ keys.shift() ];
        }
        return ( cache[ key + " " ] = value );
    }
    return cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
    fn[ expando ] = true;
    return fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
    var el = document.createElement( "fieldset" );

    try {
        return !!fn( el );
    } catch ( e ) {
        return false;
    } finally {

        // Remove from its parent by default
        if ( el.parentNode ) {
            el.parentNode.removeChild( el );
        }

        // release memory in IE
        el = null;
    }
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
    var arr = attrs.split( "|" ),
        i = arr.length;

    while ( i-- ) {
        Expr.attrHandle[ arr[ i ] ] = handler;
    }
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
    var cur = b && a,
        diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
            a.sourceIndex - b.sourceIndex;

    // Use IE sourceIndex if available on both nodes
    if ( diff ) {
        return diff;
    }

    // Check if b follows a
    if ( cur ) {
        while ( ( cur = cur.nextSibling ) ) {
            if ( cur === b ) {
                return -1;
            }
        }
    }

    return a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
    return function( elem ) {
        var name = elem.nodeName.toLowerCase();
        return name === "input" && elem.type === type;
    };
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
    return function( elem ) {
        var name = elem.nodeName.toLowerCase();
        return ( name === "input" || name === "button" ) && elem.type === type;
    };
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

    // Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
    return function( elem ) {

        // Only certain elements can match :enabled or :disabled
        // https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
        // https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
        if ( "form" in elem ) {

            // Check for inherited disabledness on relevant non-disabled elements:
            // * listed form-associated elements in a disabled fieldset
            //   https://html.spec.whatwg.org/multipage/forms.html#category-listed
            //   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
            // * option elements in a disabled optgroup
            //   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
            // All such elements have a "form" property.
            if ( elem.parentNode && elem.disabled === false ) {

                // Option elements defer to a parent optgroup if present
                if ( "label" in elem ) {
                    if ( "label" in elem.parentNode ) {
                        return elem.parentNode.disabled === disabled;
                    } else {
                        return elem.disabled === disabled;
                    }
                }

                // Support: IE 6 - 11
                // Use the isDisabled shortcut property to check for disabled fieldset ancestors
                return elem.isDisabled === disabled ||

                    // Where there is no isDisabled, check manually
                    /* jshint -W018 */
                    elem.isDisabled !== !disabled &&
                    inDisabledFieldset( elem ) === disabled;
            }

            return elem.disabled === disabled;

        // Try to winnow out elements that can't be disabled before trusting the disabled property.
        // Some victims get caught in our net (label, legend, menu, track), but it shouldn't
        // even exist on them, let alone have a boolean value.
        } else if ( "label" in elem ) {
            return elem.disabled === disabled;
        }

        // Remaining elements are neither :enabled nor :disabled
        return false;
    };
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
    return markFunction( function( argument ) {
        argument = +argument;
        return markFunction( function( seed, matches ) {
            var j,
                matchIndexes = fn( [], seed.length, argument ),
                i = matchIndexes.length;

            // Match elements found at the specified indexes
            while ( i-- ) {
                if ( seed[ ( j = matchIndexes[ i ] ) ] ) {
                    seed[ j ] = !( matches[ j ] = seed[ j ] );
                }
            }
        } );
    } );
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
    return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
    var namespace = elem.namespaceURI,
        docElem = ( elem.ownerDocument || elem ).documentElement;

    // Support: IE <=8
    // Assume HTML when documentElement doesn't yet exist, such as inside loading iframes
    // https://bugs.jquery.com/ticket/4833
    return !rhtml.test( namespace || docElem && docElem.nodeName || "HTML" );
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
    var hasCompare, subWindow,
        doc = node ? node.ownerDocument || node : preferredDoc;

    // Return early if doc is invalid or already selected
    // Support: IE 11+, Edge 17 - 18+
    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
    // two documents; shallow comparisons work.
    // eslint-disable-next-line eqeqeq
    if ( doc == document || doc.nodeType !== 9 || !doc.documentElement ) {
        return document;
    }

    // Update global variables
    document = doc;
    docElem = document.documentElement;
    documentIsHTML = !isXML( document );

    // Support: IE 9 - 11+, Edge 12 - 18+
    // Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
    // Support: IE 11+, Edge 17 - 18+
    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
    // two documents; shallow comparisons work.
    // eslint-disable-next-line eqeqeq
    if ( preferredDoc != document &&
        ( subWindow = document.defaultView ) && subWindow.top !== subWindow ) {

        // Support: IE 11, Edge
        if ( subWindow.addEventListener ) {
            subWindow.addEventListener( "unload", unloadHandler, false );

        // Support: IE 9 - 10 only
        } else if ( subWindow.attachEvent ) {
            subWindow.attachEvent( "onunload", unloadHandler );
        }
    }

    // Support: IE 8 - 11+, Edge 12 - 18+, Chrome <=16 - 25 only, Firefox <=3.6 - 31 only,
    // Safari 4 - 5 only, Opera <=11.6 - 12.x only
    // IE/Edge & older browsers don't support the :scope pseudo-class.
    // Support: Safari 6.0 only
    // Safari 6.0 supports :scope but it's an alias of :root there.
    support.scope = assert( function( el ) {
        docElem.appendChild( el ).appendChild( document.createElement( "div" ) );
        return typeof el.querySelectorAll !== "undefined" &&
            !el.querySelectorAll( ":scope fieldset div" ).length;
    } );

    /* Attributes
    ---------------------------------------------------------------------- */

    // Support: IE<8
    // Verify that getAttribute really returns attributes and not properties
    // (excepting IE8 booleans)
    support.attributes = assert( function( el ) {
        el.className = "i";
        return !el.getAttribute( "className" );
    } );

    /* getElement(s)By*
    ---------------------------------------------------------------------- */

    // Check if getElementsByTagName("*") returns only elements
    support.getElementsByTagName = assert( function( el ) {
        el.appendChild( document.createComment( "" ) );
        return !el.getElementsByTagName( "*" ).length;
    } );

    // Support: IE<9
    support.getElementsByClassName = rnative.test( document.getElementsByClassName );

    // Support: IE<10
    // Check if getElementById returns elements by name
    // The broken getElementById methods don't pick up programmatically-set names,
    // so use a roundabout getElementsByName test
    support.getById = assert( function( el ) {
        docElem.appendChild( el ).id = expando;
        return !document.getElementsByName || !document.getElementsByName( expando ).length;
    } );

    // ID filter and find
    if ( support.getById ) {
        Expr.filter[ "ID" ] = function( id ) {
            var attrId = id.replace( runescape, funescape );
            return function( elem ) {
                return elem.getAttribute( "id" ) === attrId;
            };
        };
        Expr.find[ "ID" ] = function( id, context ) {
            if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
                var elem = context.getElementById( id );
                return elem ? [ elem ] : [];
            }
        };
    } else {
        Expr.filter[ "ID" ] =  function( id ) {
            var attrId = id.replace( runescape, funescape );
            return function( elem ) {
                var node = typeof elem.getAttributeNode !== "undefined" &&
                    elem.getAttributeNode( "id" );
                return node && node.value === attrId;
            };
        };

        // Support: IE 6 - 7 only
        // getElementById is not reliable as a find shortcut
        Expr.find[ "ID" ] = function( id, context ) {
            if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
                var node, i, elems,
                    elem = context.getElementById( id );

                if ( elem ) {

                    // Verify the id attribute
                    node = elem.getAttributeNode( "id" );
                    if ( node && node.value === id ) {
                        return [ elem ];
                    }

                    // Fall back on getElementsByName
                    elems = context.getElementsByName( id );
                    i = 0;
                    while ( ( elem = elems[ i++ ] ) ) {
                        node = elem.getAttributeNode( "id" );
                        if ( node && node.value === id ) {
                            return [ elem ];
                        }
                    }
                }

                return [];
            }
        };
    }

    // Tag
    Expr.find[ "TAG" ] = support.getElementsByTagName ?
        function( tag, context ) {
            if ( typeof context.getElementsByTagName !== "undefined" ) {
                return context.getElementsByTagName( tag );

            // DocumentFragment nodes don't have gEBTN
            } else if ( support.qsa ) {
                return context.querySelectorAll( tag );
            }
        } :

        function( tag, context ) {
            var elem,
                tmp = [],
                i = 0,

                // By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
                results = context.getElementsByTagName( tag );

            // Filter out possible comments
            if ( tag === "*" ) {
                while ( ( elem = results[ i++ ] ) ) {
                    if ( elem.nodeType === 1 ) {
                        tmp.push( elem );
                    }
                }

                return tmp;
            }
            return results;
        };

    // Class
    Expr.find[ "CLASS" ] = support.getElementsByClassName && function( className, context ) {
        if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
            return context.getElementsByClassName( className );
        }
    };

    /* QSA/matchesSelector
    ---------------------------------------------------------------------- */

    // QSA and matchesSelector support

    // matchesSelector(:active) reports false when true (IE9/Opera 11.5)
    rbuggyMatches = [];

    // qSa(:focus) reports false when true (Chrome 21)
    // We allow this because of a bug in IE8/9 that throws an error
    // whenever `document.activeElement` is accessed on an iframe
    // So, we allow :focus to pass through QSA all the time to avoid the IE error
    // See https://bugs.jquery.com/ticket/13378
    rbuggyQSA = [];

    if ( ( support.qsa = rnative.test( document.querySelectorAll ) ) ) {

        // Build QSA regex
        // Regex strategy adopted from Diego Perini
        assert( function( el ) {

            var input;

            // Select is set to empty string on purpose
            // This is to test IE's treatment of not explicitly
            // setting a boolean content attribute,
            // since its presence should be enough
            // https://bugs.jquery.com/ticket/12359
            docElem.appendChild( el ).innerHTML = "<a id='" + expando + "'></a>" +
                "<select id='" + expando + "-\r\\' msallowcapture=''>" +
                "<option selected=''></option></select>";

            // Support: IE8, Opera 11-12.16
            // Nothing should be selected when empty strings follow ^= or $= or *=
            // The test attribute must be unknown in Opera but "safe" for WinRT
            // https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
            if ( el.querySelectorAll( "[msallowcapture^='']" ).length ) {
                rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
            }

            // Support: IE8
            // Boolean attributes and "value" are not treated correctly
            if ( !el.querySelectorAll( "[selected]" ).length ) {
                rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
            }

            // Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
            if ( !el.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
                rbuggyQSA.push( "~=" );
            }

            // Support: IE 11+, Edge 15 - 18+
            // IE 11/Edge don't find elements on a `[name='']` query in some cases.
            // Adding a temporary attribute to the document before the selection works
            // around the issue.
            // Interestingly, IE 10 & older don't seem to have the issue.
            input = document.createElement( "input" );
            input.setAttribute( "name", "" );
            el.appendChild( input );
            if ( !el.querySelectorAll( "[name='']" ).length ) {
                rbuggyQSA.push( "\\[" + whitespace + "*name" + whitespace + "*=" +
                    whitespace + "*(?:''|\"\")" );
            }

            // Webkit/Opera - :checked should return selected option elements
            // http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
            // IE8 throws error here and will not see later tests
            if ( !el.querySelectorAll( ":checked" ).length ) {
                rbuggyQSA.push( ":checked" );
            }

            // Support: Safari 8+, iOS 8+
            // https://bugs.webkit.org/show_bug.cgi?id=136851
            // In-page `selector#id sibling-combinator selector` fails
            if ( !el.querySelectorAll( "a#" + expando + "+*" ).length ) {
                rbuggyQSA.push( ".#.+[+~]" );
            }

            // Support: Firefox <=3.6 - 5 only
            // Old Firefox doesn't throw on a badly-escaped identifier.
            el.querySelectorAll( "\\\f" );
            rbuggyQSA.push( "[\\r\\n\\f]" );
        } );

        assert( function( el ) {
            el.innerHTML = "<a href='' disabled='disabled'></a>" +
                "<select disabled='disabled'><option/></select>";

            // Support: Windows 8 Native Apps
            // The type and name attributes are restricted during .innerHTML assignment
            var input = document.createElement( "input" );
            input.setAttribute( "type", "hidden" );
            el.appendChild( input ).setAttribute( "name", "D" );

            // Support: IE8
            // Enforce case-sensitivity of name attribute
            if ( el.querySelectorAll( "[name=d]" ).length ) {
                rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
            }

            // FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
            // IE8 throws error here and will not see later tests
            if ( el.querySelectorAll( ":enabled" ).length !== 2 ) {
                rbuggyQSA.push( ":enabled", ":disabled" );
            }

            // Support: IE9-11+
            // IE's :disabled selector does not pick up the children of disabled fieldsets
            docElem.appendChild( el ).disabled = true;
            if ( el.querySelectorAll( ":disabled" ).length !== 2 ) {
                rbuggyQSA.push( ":enabled", ":disabled" );
            }

            // Support: Opera 10 - 11 only
            // Opera 10-11 does not throw on post-comma invalid pseudos
            el.querySelectorAll( "*,:x" );
            rbuggyQSA.push( ",.*:" );
        } );
    }

    if ( ( support.matchesSelector = rnative.test( ( matches = docElem.matches ||
        docElem.webkitMatchesSelector ||
        docElem.mozMatchesSelector ||
        docElem.oMatchesSelector ||
        docElem.msMatchesSelector ) ) ) ) {

        assert( function( el ) {

            // Check to see if it's possible to do matchesSelector
            // on a disconnected node (IE 9)
            support.disconnectedMatch = matches.call( el, "*" );

            // This should fail with an exception
            // Gecko does not error, returns false instead
            matches.call( el, "[s!='']:x" );
            rbuggyMatches.push( "!=", pseudos );
        } );
    }

    rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join( "|" ) );
    rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join( "|" ) );

    /* Contains
    ---------------------------------------------------------------------- */
    hasCompare = rnative.test( docElem.compareDocumentPosition );

    // Element contains another
    // Purposefully self-exclusive
    // As in, an element does not contain itself
    contains = hasCompare || rnative.test( docElem.contains ) ?
        function( a, b ) {
            var adown = a.nodeType === 9 ? a.documentElement : a,
                bup = b && b.parentNode;
            return a === bup || !!( bup && bup.nodeType === 1 && (
                adown.contains ?
                    adown.contains( bup ) :
                    a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
            ) );
        } :
        function( a, b ) {
            if ( b ) {
                while ( ( b = b.parentNode ) ) {
                    if ( b === a ) {
                        return true;
                    }
                }
            }
            return false;
        };

    /* Sorting
    ---------------------------------------------------------------------- */

    // Document order sorting
    sortOrder = hasCompare ?
    function( a, b ) {

        // Flag for duplicate removal
        if ( a === b ) {
            hasDuplicate = true;
            return 0;
        }

        // Sort on method existence if only one input has compareDocumentPosition
        var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
        if ( compare ) {
            return compare;
        }

        // Calculate position if both inputs belong to the same document
        // Support: IE 11+, Edge 17 - 18+
        // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
        // two documents; shallow comparisons work.
        // eslint-disable-next-line eqeqeq
        compare = ( a.ownerDocument || a ) == ( b.ownerDocument || b ) ?
            a.compareDocumentPosition( b ) :

            // Otherwise we know they are disconnected
            1;

        // Disconnected nodes
        if ( compare & 1 ||
            ( !support.sortDetached && b.compareDocumentPosition( a ) === compare ) ) {

            // Choose the first element that is related to our preferred document
            // Support: IE 11+, Edge 17 - 18+
            // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
            // two documents; shallow comparisons work.
            // eslint-disable-next-line eqeqeq
            if ( a == document || a.ownerDocument == preferredDoc &&
                contains( preferredDoc, a ) ) {
                return -1;
            }

            // Support: IE 11+, Edge 17 - 18+
            // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
            // two documents; shallow comparisons work.
            // eslint-disable-next-line eqeqeq
            if ( b == document || b.ownerDocument == preferredDoc &&
                contains( preferredDoc, b ) ) {
                return 1;
            }

            // Maintain original order
            return sortInput ?
                ( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
                0;
        }

        return compare & 4 ? -1 : 1;
    } :
    function( a, b ) {

        // Exit early if the nodes are identical
        if ( a === b ) {
            hasDuplicate = true;
            return 0;
        }

        var cur,
            i = 0,
            aup = a.parentNode,
            bup = b.parentNode,
            ap = [ a ],
            bp = [ b ];

        // Parentless nodes are either documents or disconnected
        if ( !aup || !bup ) {

            // Support: IE 11+, Edge 17 - 18+
            // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
            // two documents; shallow comparisons work.
            /* eslint-disable eqeqeq */
            return a == document ? -1 :
                b == document ? 1 :
                /* eslint-enable eqeqeq */
                aup ? -1 :
                bup ? 1 :
                sortInput ?
                ( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
                0;

        // If the nodes are siblings, we can do a quick check
        } else if ( aup === bup ) {
            return siblingCheck( a, b );
        }

        // Otherwise we need full lists of their ancestors for comparison
        cur = a;
        while ( ( cur = cur.parentNode ) ) {
            ap.unshift( cur );
        }
        cur = b;
        while ( ( cur = cur.parentNode ) ) {
            bp.unshift( cur );
        }

        // Walk down the tree looking for a discrepancy
        while ( ap[ i ] === bp[ i ] ) {
            i++;
        }

        return i ?

            // Do a sibling check if the nodes have a common ancestor
            siblingCheck( ap[ i ], bp[ i ] ) :

            // Otherwise nodes in our document sort first
            // Support: IE 11+, Edge 17 - 18+
            // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
            // two documents; shallow comparisons work.
            /* eslint-disable eqeqeq */
            ap[ i ] == preferredDoc ? -1 :
            bp[ i ] == preferredDoc ? 1 :
            /* eslint-enable eqeqeq */
            0;
    };

    return document;
};

Sizzle.matches = function( expr, elements ) {
    return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
    setDocument( elem );

    if ( support.matchesSelector && documentIsHTML &&
        !nonnativeSelectorCache[ expr + " " ] &&
        ( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
        ( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

        try {
            var ret = matches.call( elem, expr );

            // IE 9's matchesSelector returns false on disconnected nodes
            if ( ret || support.disconnectedMatch ||

                // As well, disconnected nodes are said to be in a document
                // fragment in IE 9
                elem.document && elem.document.nodeType !== 11 ) {
                return ret;
            }
        } catch ( e ) {
            nonnativeSelectorCache( expr, true );
        }
    }

    return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {

    // Set document vars if needed
    // Support: IE 11+, Edge 17 - 18+
    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
    // two documents; shallow comparisons work.
    // eslint-disable-next-line eqeqeq
    if ( ( context.ownerDocument || context ) != document ) {
        setDocument( context );
    }
    return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {

    // Set document vars if needed
    // Support: IE 11+, Edge 17 - 18+
    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
    // two documents; shallow comparisons work.
    // eslint-disable-next-line eqeqeq
    if ( ( elem.ownerDocument || elem ) != document ) {
        setDocument( elem );
    }

    var fn = Expr.attrHandle[ name.toLowerCase() ],

        // Don't get fooled by Object.prototype properties (jQuery #13807)
        val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
            fn( elem, name, !documentIsHTML ) :
            undefined;

    return val !== undefined ?
        val :
        support.attributes || !documentIsHTML ?
            elem.getAttribute( name ) :
            ( val = elem.getAttributeNode( name ) ) && val.specified ?
                val.value :
                null;
};

Sizzle.escape = function( sel ) {
    return ( sel + "" ).replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
    throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
    var elem,
        duplicates = [],
        j = 0,
        i = 0;

    // Unless we *know* we can detect duplicates, assume their presence
    hasDuplicate = !support.detectDuplicates;
    sortInput = !support.sortStable && results.slice( 0 );
    results.sort( sortOrder );

    if ( hasDuplicate ) {
        while ( ( elem = results[ i++ ] ) ) {
            if ( elem === results[ i ] ) {
                j = duplicates.push( i );
            }
        }
        while ( j-- ) {
            results.splice( duplicates[ j ], 1 );
        }
    }

    // Clear input after sorting to release objects
    // See https://github.com/jquery/sizzle/pull/225
    sortInput = null;

    return results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
    var node,
        ret = "",
        i = 0,
        nodeType = elem.nodeType;

    if ( !nodeType ) {

        // If no nodeType, this is expected to be an array
        while ( ( node = elem[ i++ ] ) ) {

            // Do not traverse comment nodes
            ret += getText( node );
        }
    } else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {

        // Use textContent for elements
        // innerText usage removed for consistency of new lines (jQuery #11153)
        if ( typeof elem.textContent === "string" ) {
            return elem.textContent;
        } else {

            // Traverse its children
            for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
                ret += getText( elem );
            }
        }
    } else if ( nodeType === 3 || nodeType === 4 ) {
        return elem.nodeValue;
    }

    // Do not include comment or processing instruction nodes

    return ret;
};

Expr = Sizzle.selectors = {

    // Can be adjusted by the user
    cacheLength: 50,

    createPseudo: markFunction,

    match: matchExpr,

    attrHandle: {},

    find: {},

    relative: {
        ">": { dir: "parentNode", first: true },
        " ": { dir: "parentNode" },
        "+": { dir: "previousSibling", first: true },
        "~": { dir: "previousSibling" }
    },

    preFilter: {
        "ATTR": function( match ) {
            match[ 1 ] = match[ 1 ].replace( runescape, funescape );

            // Move the given value to match[3] whether quoted or unquoted
            match[ 3 ] = ( match[ 3 ] || match[ 4 ] ||
                match[ 5 ] || "" ).replace( runescape, funescape );

            if ( match[ 2 ] === "~=" ) {
                match[ 3 ] = " " + match[ 3 ] + " ";
            }

            return match.slice( 0, 4 );
        },

        "CHILD": function( match ) {

            /* matches from matchExpr["CHILD"]
                1 type (only|nth|...)
                2 what (child|of-type)
                3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
                4 xn-component of xn+y argument ([+-]?\d*n|)
                5 sign of xn-component
                6 x of xn-component
                7 sign of y-component
                8 y of y-component
            */
            match[ 1 ] = match[ 1 ].toLowerCase();

            if ( match[ 1 ].slice( 0, 3 ) === "nth" ) {

                // nth-* requires argument
                if ( !match[ 3 ] ) {
                    Sizzle.error( match[ 0 ] );
                }

                // numeric x and y parameters for Expr.filter.CHILD
                // remember that false/true cast respectively to 0/1
                match[ 4 ] = +( match[ 4 ] ?
                    match[ 5 ] + ( match[ 6 ] || 1 ) :
                    2 * ( match[ 3 ] === "even" || match[ 3 ] === "odd" ) );
                match[ 5 ] = +( ( match[ 7 ] + match[ 8 ] ) || match[ 3 ] === "odd" );

                // other types prohibit arguments
            } else if ( match[ 3 ] ) {
                Sizzle.error( match[ 0 ] );
            }

            return match;
        },

        "PSEUDO": function( match ) {
            var excess,
                unquoted = !match[ 6 ] && match[ 2 ];

            if ( matchExpr[ "CHILD" ].test( match[ 0 ] ) ) {
                return null;
            }

            // Accept quoted arguments as-is
            if ( match[ 3 ] ) {
                match[ 2 ] = match[ 4 ] || match[ 5 ] || "";

            // Strip excess characters from unquoted arguments
            } else if ( unquoted && rpseudo.test( unquoted ) &&

                // Get excess from tokenize (recursively)
                ( excess = tokenize( unquoted, true ) ) &&

                // advance to the next closing parenthesis
                ( excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length ) ) {

                // excess is a negative index
                match[ 0 ] = match[ 0 ].slice( 0, excess );
                match[ 2 ] = unquoted.slice( 0, excess );
            }

            // Return only captures needed by the pseudo filter method (type and argument)
            return match.slice( 0, 3 );
        }
    },

    filter: {

        "TAG": function( nodeNameSelector ) {
            var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
            return nodeNameSelector === "*" ?
                function() {
                    return true;
                } :
                function( elem ) {
                    return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
                };
        },

        "CLASS": function( className ) {
            var pattern = classCache[ className + " " ];

            return pattern ||
                ( pattern = new RegExp( "(^|" + whitespace +
                    ")" + className + "(" + whitespace + "|$)" ) ) && classCache(
                        className, function( elem ) {
                            return pattern.test(
                                typeof elem.className === "string" && elem.className ||
                                typeof elem.getAttribute !== "undefined" &&
                                    elem.getAttribute( "class" ) ||
                                ""
                            );
                } );
        },

        "ATTR": function( name, operator, check ) {
            return function( elem ) {
                var result = Sizzle.attr( elem, name );

                if ( result == null ) {
                    return operator === "!=";
                }
                if ( !operator ) {
                    return true;
                }

                result += "";

                /* eslint-disable max-len */

                return operator === "=" ? result === check :
                    operator === "!=" ? result !== check :
                    operator === "^=" ? check && result.indexOf( check ) === 0 :
                    operator === "*=" ? check && result.indexOf( check ) > -1 :
                    operator === "$=" ? check && result.slice( -check.length ) === check :
                    operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
                    operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
                    false;
                /* eslint-enable max-len */

            };
        },

        "CHILD": function( type, what, _argument, first, last ) {
            var simple = type.slice( 0, 3 ) !== "nth",
                forward = type.slice( -4 ) !== "last",
                ofType = what === "of-type";

            return first === 1 && last === 0 ?

                // Shortcut for :nth-*(n)
                function( elem ) {
                    return !!elem.parentNode;
                } :

                function( elem, _context, xml ) {
                    var cache, uniqueCache, outerCache, node, nodeIndex, start,
                        dir = simple !== forward ? "nextSibling" : "previousSibling",
                        parent = elem.parentNode,
                        name = ofType && elem.nodeName.toLowerCase(),
                        useCache = !xml && !ofType,
                        diff = false;

                    if ( parent ) {

                        // :(first|last|only)-(child|of-type)
                        if ( simple ) {
                            while ( dir ) {
                                node = elem;
                                while ( ( node = node[ dir ] ) ) {
                                    if ( ofType ?
                                        node.nodeName.toLowerCase() === name :
                                        node.nodeType === 1 ) {

                                        return false;
                                    }
                                }

                                // Reverse direction for :only-* (if we haven't yet done so)
                                start = dir = type === "only" && !start && "nextSibling";
                            }
                            return true;
                        }

                        start = [ forward ? parent.firstChild : parent.lastChild ];

                        // non-xml :nth-child(...) stores cache data on `parent`
                        if ( forward && useCache ) {

                            // Seek `elem` from a previously-cached index

                            // ...in a gzip-friendly way
                            node = parent;
                            outerCache = node[ expando ] || ( node[ expando ] = {} );

                            // Support: IE <9 only
                            // Defend against cloned attroperties (jQuery gh-1709)
                            uniqueCache = outerCache[ node.uniqueID ] ||
                                ( outerCache[ node.uniqueID ] = {} );

                            cache = uniqueCache[ type ] || [];
                            nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
                            diff = nodeIndex && cache[ 2 ];
                            node = nodeIndex && parent.childNodes[ nodeIndex ];

                            while ( ( node = ++nodeIndex && node && node[ dir ] ||

                                // Fallback to seeking `elem` from the start
                                ( diff = nodeIndex = 0 ) || start.pop() ) ) {

                                // When found, cache indexes on `parent` and break
                                if ( node.nodeType === 1 && ++diff && node === elem ) {
                                    uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
                                    break;
                                }
                            }

                        } else {

                            // Use previously-cached element index if available
                            if ( useCache ) {

                                // ...in a gzip-friendly way
                                node = elem;
                                outerCache = node[ expando ] || ( node[ expando ] = {} );

                                // Support: IE <9 only
                                // Defend against cloned attroperties (jQuery gh-1709)
                                uniqueCache = outerCache[ node.uniqueID ] ||
                                    ( outerCache[ node.uniqueID ] = {} );

                                cache = uniqueCache[ type ] || [];
                                nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
                                diff = nodeIndex;
                            }

                            // xml :nth-child(...)
                            // or :nth-last-child(...) or :nth(-last)?-of-type(...)
                            if ( diff === false ) {

                                // Use the same loop as above to seek `elem` from the start
                                while ( ( node = ++nodeIndex && node && node[ dir ] ||
                                    ( diff = nodeIndex = 0 ) || start.pop() ) ) {

                                    if ( ( ofType ?
                                        node.nodeName.toLowerCase() === name :
                                        node.nodeType === 1 ) &&
                                        ++diff ) {

                                        // Cache the index of each encountered element
                                        if ( useCache ) {
                                            outerCache = node[ expando ] ||
                                                ( node[ expando ] = {} );

                                            // Support: IE <9 only
                                            // Defend against cloned attroperties (jQuery gh-1709)
                                            uniqueCache = outerCache[ node.uniqueID ] ||
                                                ( outerCache[ node.uniqueID ] = {} );

                                            uniqueCache[ type ] = [ dirruns, diff ];
                                        }

                                        if ( node === elem ) {
                                            break;
                                        }
                                    }
                                }
                            }
                        }

                        // Incorporate the offset, then check against cycle size
                        diff -= last;
                        return diff === first || ( diff % first === 0 && diff / first >= 0 );
                    }
                };
        },

        "PSEUDO": function( pseudo, argument ) {

            // pseudo-class names are case-insensitive
            // http://www.w3.org/TR/selectors/#pseudo-classes
            // Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
            // Remember that setFilters inherits from pseudos
            var args,
                fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
                    Sizzle.error( "unsupported pseudo: " + pseudo );

            // The user may use createPseudo to indicate that
            // arguments are needed to create the filter function
            // just as Sizzle does
            if ( fn[ expando ] ) {
                return fn( argument );
            }

            // But maintain support for old signatures
            if ( fn.length > 1 ) {
                args = [ pseudo, pseudo, "", argument ];
                return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
                    markFunction( function( seed, matches ) {
                        var idx,
                            matched = fn( seed, argument ),
                            i = matched.length;
                        while ( i-- ) {
                            idx = indexOf( seed, matched[ i ] );
                            seed[ idx ] = !( matches[ idx ] = matched[ i ] );
                        }
                    } ) :
                    function( elem ) {
                        return fn( elem, 0, args );
                    };
            }

            return fn;
        }
    },

    pseudos: {

        // Potentially complex pseudos
        "not": markFunction( function( selector ) {

            // Trim the selector passed to compile
            // to avoid treating leading and trailing
            // spaces as combinators
            var input = [],
                results = [],
                matcher = compile( selector.replace( rtrim, "$1" ) );

            return matcher[ expando ] ?
                markFunction( function( seed, matches, _context, xml ) {
                    var elem,
                        unmatched = matcher( seed, null, xml, [] ),
                        i = seed.length;

                    // Match elements unmatched by `matcher`
                    while ( i-- ) {
                        if ( ( elem = unmatched[ i ] ) ) {
                            seed[ i ] = !( matches[ i ] = elem );
                        }
                    }
                } ) :
                function( elem, _context, xml ) {
                    input[ 0 ] = elem;
                    matcher( input, null, xml, results );

                    // Don't keep the element (issue #299)
                    input[ 0 ] = null;
                    return !results.pop();
                };
        } ),

        "has": markFunction( function( selector ) {
            return function( elem ) {
                return Sizzle( selector, elem ).length > 0;
            };
        } ),

        "contains": markFunction( function( text ) {
            text = text.replace( runescape, funescape );
            return function( elem ) {
                return ( elem.textContent || getText( elem ) ).indexOf( text ) > -1;
            };
        } ),

        // "Whether an element is represented by a :lang() selector
        // is based solely on the element's language value
        // being equal to the identifier C,
        // or beginning with the identifier C immediately followed by "-".
        // The matching of C against the element's language value is performed case-insensitively.
        // The identifier C does not have to be a valid language name."
        // http://www.w3.org/TR/selectors/#lang-pseudo
        "lang": markFunction( function( lang ) {

            // lang value must be a valid identifier
            if ( !ridentifier.test( lang || "" ) ) {
                Sizzle.error( "unsupported lang: " + lang );
            }
            lang = lang.replace( runescape, funescape ).toLowerCase();
            return function( elem ) {
                var elemLang;
                do {
                    if ( ( elemLang = documentIsHTML ?
                        elem.lang :
                        elem.getAttribute( "xml:lang" ) || elem.getAttribute( "lang" ) ) ) {

                        elemLang = elemLang.toLowerCase();
                        return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
                    }
                } while ( ( elem = elem.parentNode ) && elem.nodeType === 1 );
                return false;
            };
        } ),

        // Miscellaneous
        "target": function( elem ) {
            var hash = window.location && window.location.hash;
            return hash && hash.slice( 1 ) === elem.id;
        },

        "root": function( elem ) {
            return elem === docElem;
        },

        "focus": function( elem ) {
            return elem === document.activeElement &&
                ( !document.hasFocus || document.hasFocus() ) &&
                !!( elem.type || elem.href || ~elem.tabIndex );
        },

        // Boolean properties
        "enabled": createDisabledPseudo( false ),
        "disabled": createDisabledPseudo( true ),

        "checked": function( elem ) {

            // In CSS3, :checked should return both checked and selected elements
            // http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
            var nodeName = elem.nodeName.toLowerCase();
            return ( nodeName === "input" && !!elem.checked ) ||
                ( nodeName === "option" && !!elem.selected );
        },

        "selected": function( elem ) {

            // Accessing this property makes selected-by-default
            // options in Safari work properly
            if ( elem.parentNode ) {
                // eslint-disable-next-line no-unused-expressions
                elem.parentNode.selectedIndex;
            }

            return elem.selected === true;
        },

        // Contents
        "empty": function( elem ) {

            // http://www.w3.org/TR/selectors/#empty-pseudo
            // :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
            //   but not by others (comment: 8; processing instruction: 7; etc.)
            // nodeType < 6 works because attributes (2) do not appear as children
            for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
                if ( elem.nodeType < 6 ) {
                    return false;
                }
            }
            return true;
        },

        "parent": function( elem ) {
            return !Expr.pseudos[ "empty" ]( elem );
        },

        // Element/input types
        "header": function( elem ) {
            return rheader.test( elem.nodeName );
        },

        "input": function( elem ) {
            return rinputs.test( elem.nodeName );
        },

        "button": function( elem ) {
            var name = elem.nodeName.toLowerCase();
            return name === "input" && elem.type === "button" || name === "button";
        },

        "text": function( elem ) {
            var attr;
            return elem.nodeName.toLowerCase() === "input" &&
                elem.type === "text" &&

                // Support: IE<8
                // New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
                ( ( attr = elem.getAttribute( "type" ) ) == null ||
                    attr.toLowerCase() === "text" );
        },

        // Position-in-collection
        "first": createPositionalPseudo( function() {
            return [ 0 ];
        } ),

        "last": createPositionalPseudo( function( _matchIndexes, length ) {
            return [ length - 1 ];
        } ),

        "eq": createPositionalPseudo( function( _matchIndexes, length, argument ) {
            return [ argument < 0 ? argument + length : argument ];
        } ),

        "even": createPositionalPseudo( function( matchIndexes, length ) {
            var i = 0;
            for ( ; i < length; i += 2 ) {
                matchIndexes.push( i );
            }
            return matchIndexes;
        } ),

        "odd": createPositionalPseudo( function( matchIndexes, length ) {
            var i = 1;
            for ( ; i < length; i += 2 ) {
                matchIndexes.push( i );
            }
            return matchIndexes;
        } ),

        "lt": createPositionalPseudo( function( matchIndexes, length, argument ) {
            var i = argument < 0 ?
                argument + length :
                argument > length ?
                    length :
                    argument;
            for ( ; --i >= 0; ) {
                matchIndexes.push( i );
            }
            return matchIndexes;
        } ),

        "gt": createPositionalPseudo( function( matchIndexes, length, argument ) {
            var i = argument < 0 ? argument + length : argument;
            for ( ; ++i < length; ) {
                matchIndexes.push( i );
            }
            return matchIndexes;
        } )
    }
};

Expr.pseudos[ "nth" ] = Expr.pseudos[ "eq" ];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
    Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
    Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
    var matched, match, tokens, type,
        soFar, groups, preFilters,
        cached = tokenCache[ selector + " " ];

    if ( cached ) {
        return parseOnly ? 0 : cached.slice( 0 );
    }

    soFar = selector;
    groups = [];
    preFilters = Expr.preFilter;

    while ( soFar ) {

        // Comma and first run
        if ( !matched || ( match = rcomma.exec( soFar ) ) ) {
            if ( match ) {

                // Don't consume trailing commas as valid
                soFar = soFar.slice( match[ 0 ].length ) || soFar;
            }
            groups.push( ( tokens = [] ) );
        }

        matched = false;

        // Combinators
        if ( ( match = rcombinators.exec( soFar ) ) ) {
            matched = match.shift();
            tokens.push( {
                value: matched,

                // Cast descendant combinators to space
                type: match[ 0 ].replace( rtrim, " " )
            } );
            soFar = soFar.slice( matched.length );
        }

        // Filters
        for ( type in Expr.filter ) {
            if ( ( match = matchExpr[ type ].exec( soFar ) ) && ( !preFilters[ type ] ||
                ( match = preFilters[ type ]( match ) ) ) ) {
                matched = match.shift();
                tokens.push( {
                    value: matched,
                    type: type,
                    matches: match
                } );
                soFar = soFar.slice( matched.length );
            }
        }

        if ( !matched ) {
            break;
        }
    }

    // Return the length of the invalid excess
    // if we're just parsing
    // Otherwise, throw an error or return tokens
    return parseOnly ?
        soFar.length :
        soFar ?
            Sizzle.error( selector ) :

            // Cache the tokens
            tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
    var i = 0,
        len = tokens.length,
        selector = "";
    for ( ; i < len; i++ ) {
        selector += tokens[ i ].value;
    }
    return selector;
}

function addCombinator( matcher, combinator, base ) {
    var dir = combinator.dir,
        skip = combinator.next,
        key = skip || dir,
        checkNonElements = base && key === "parentNode",
        doneName = done++;

    return combinator.first ?

        // Check against closest ancestor/preceding element
        function( elem, context, xml ) {
            while ( ( elem = elem[ dir ] ) ) {
                if ( elem.nodeType === 1 || checkNonElements ) {
                    return matcher( elem, context, xml );
                }
            }
            return false;
        } :

        // Check against all ancestor/preceding elements
        function( elem, context, xml ) {
            var oldCache, uniqueCache, outerCache,
                newCache = [ dirruns, doneName ];

            // We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
            if ( xml ) {
                while ( ( elem = elem[ dir ] ) ) {
                    if ( elem.nodeType === 1 || checkNonElements ) {
                        if ( matcher( elem, context, xml ) ) {
                            return true;
                        }
                    }
                }
            } else {
                while ( ( elem = elem[ dir ] ) ) {
                    if ( elem.nodeType === 1 || checkNonElements ) {
                        outerCache = elem[ expando ] || ( elem[ expando ] = {} );

                        // Support: IE <9 only
                        // Defend against cloned attroperties (jQuery gh-1709)
                        uniqueCache = outerCache[ elem.uniqueID ] ||
                            ( outerCache[ elem.uniqueID ] = {} );

                        if ( skip && skip === elem.nodeName.toLowerCase() ) {
                            elem = elem[ dir ] || elem;
                        } else if ( ( oldCache = uniqueCache[ key ] ) &&
                            oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

                            // Assign to newCache so results back-propagate to previous elements
                            return ( newCache[ 2 ] = oldCache[ 2 ] );
                        } else {

                            // Reuse newcache so results back-propagate to previous elements
                            uniqueCache[ key ] = newCache;

                            // A match means we're done; a fail means we have to keep checking
                            if ( ( newCache[ 2 ] = matcher( elem, context, xml ) ) ) {
                                return true;
                            }
                        }
                    }
                }
            }
            return false;
        };
}

function elementMatcher( matchers ) {
    return matchers.length > 1 ?
        function( elem, context, xml ) {
            var i = matchers.length;
            while ( i-- ) {
                if ( !matchers[ i ]( elem, context, xml ) ) {
                    return false;
                }
            }
            return true;
        } :
        matchers[ 0 ];
}

function multipleContexts( selector, contexts, results ) {
    var i = 0,
        len = contexts.length;
    for ( ; i < len; i++ ) {
        Sizzle( selector, contexts[ i ], results );
    }
    return results;
}

function condense( unmatched, map, filter, context, xml ) {
    var elem,
        newUnmatched = [],
        i = 0,
        len = unmatched.length,
        mapped = map != null;

    for ( ; i < len; i++ ) {
        if ( ( elem = unmatched[ i ] ) ) {
            if ( !filter || filter( elem, context, xml ) ) {
                newUnmatched.push( elem );
                if ( mapped ) {
                    map.push( i );
                }
            }
        }
    }

    return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
    if ( postFilter && !postFilter[ expando ] ) {
        postFilter = setMatcher( postFilter );
    }
    if ( postFinder && !postFinder[ expando ] ) {
        postFinder = setMatcher( postFinder, postSelector );
    }
    return markFunction( function( seed, results, context, xml ) {
        var temp, i, elem,
            preMap = [],
            postMap = [],
            preexisting = results.length,

            // Get initial elements from seed or context
            elems = seed || multipleContexts(
                selector || "*",
                context.nodeType ? [ context ] : context,
                []
            ),

            // Prefilter to get matcher input, preserving a map for seed-results synchronization
            matcherIn = preFilter && ( seed || !selector ) ?
                condense( elems, preMap, preFilter, context, xml ) :
                elems,

            matcherOut = matcher ?

                // If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
                postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

                    // ...intermediate processing is necessary
                    [] :

                    // ...otherwise use results directly
                    results :
                matcherIn;

        // Find primary matches
        if ( matcher ) {
            matcher( matcherIn, matcherOut, context, xml );
        }

        // Apply postFilter
        if ( postFilter ) {
            temp = condense( matcherOut, postMap );
            postFilter( temp, [], context, xml );

            // Un-match failing elements by moving them back to matcherIn
            i = temp.length;
            while ( i-- ) {
                if ( ( elem = temp[ i ] ) ) {
                    matcherOut[ postMap[ i ] ] = !( matcherIn[ postMap[ i ] ] = elem );
                }
            }
        }

        if ( seed ) {
            if ( postFinder || preFilter ) {
                if ( postFinder ) {

                    // Get the final matcherOut by condensing this intermediate into postFinder contexts
                    temp = [];
                    i = matcherOut.length;
                    while ( i-- ) {
                        if ( ( elem = matcherOut[ i ] ) ) {

                            // Restore matcherIn since elem is not yet a final match
                            temp.push( ( matcherIn[ i ] = elem ) );
                        }
                    }
                    postFinder( null, ( matcherOut = [] ), temp, xml );
                }

                // Move matched elements from seed to results to keep them synchronized
                i = matcherOut.length;
                while ( i-- ) {
                    if ( ( elem = matcherOut[ i ] ) &&
                        ( temp = postFinder ? indexOf( seed, elem ) : preMap[ i ] ) > -1 ) {

                        seed[ temp ] = !( results[ temp ] = elem );
                    }
                }
            }

        // Add elements to results, through postFinder if defined
        } else {
            matcherOut = condense(
                matcherOut === results ?
                    matcherOut.splice( preexisting, matcherOut.length ) :
                    matcherOut
            );
            if ( postFinder ) {
                postFinder( null, results, matcherOut, xml );
            } else {
                push.apply( results, matcherOut );
            }
        }
    } );
}

function matcherFromTokens( tokens ) {
    var checkContext, matcher, j,
        len = tokens.length,
        leadingRelative = Expr.relative[ tokens[ 0 ].type ],
        implicitRelative = leadingRelative || Expr.relative[ " " ],
        i = leadingRelative ? 1 : 0,

        // The foundational matcher ensures that elements are reachable from top-level context(s)
        matchContext = addCombinator( function( elem ) {
            return elem === checkContext;
        }, implicitRelative, true ),
        matchAnyContext = addCombinator( function( elem ) {
            return indexOf( checkContext, elem ) > -1;
        }, implicitRelative, true ),
        matchers = [ function( elem, context, xml ) {
            var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
                ( checkContext = context ).nodeType ?
                    matchContext( elem, context, xml ) :
                    matchAnyContext( elem, context, xml ) );

            // Avoid hanging onto element (issue #299)
            checkContext = null;
            return ret;
        } ];

    for ( ; i < len; i++ ) {
        if ( ( matcher = Expr.relative[ tokens[ i ].type ] ) ) {
            matchers = [ addCombinator( elementMatcher( matchers ), matcher ) ];
        } else {
            matcher = Expr.filter[ tokens[ i ].type ].apply( null, tokens[ i ].matches );

            // Return special upon seeing a positional matcher
            if ( matcher[ expando ] ) {

                // Find the next relative operator (if any) for proper handling
                j = ++i;
                for ( ; j < len; j++ ) {
                    if ( Expr.relative[ tokens[ j ].type ] ) {
                        break;
                    }
                }
                return setMatcher(
                    i > 1 && elementMatcher( matchers ),
                    i > 1 && toSelector(

                    // If the preceding token was a descendant combinator, insert an implicit any-element `*`
                    tokens
                        .slice( 0, i - 1 )
                        .concat( { value: tokens[ i - 2 ].type === " " ? "*" : "" } )
                    ).replace( rtrim, "$1" ),
                    matcher,
                    i < j && matcherFromTokens( tokens.slice( i, j ) ),
                    j < len && matcherFromTokens( ( tokens = tokens.slice( j ) ) ),
                    j < len && toSelector( tokens )
                );
            }
            matchers.push( matcher );
        }
    }

    return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
    var bySet = setMatchers.length > 0,
        byElement = elementMatchers.length > 0,
        superMatcher = function( seed, context, xml, results, outermost ) {
            var elem, j, matcher,
                matchedCount = 0,
                i = "0",
                unmatched = seed && [],
                setMatched = [],
                contextBackup = outermostContext,

                // We must always have either seed elements or outermost context
                elems = seed || byElement && Expr.find[ "TAG" ]( "*", outermost ),

                // Use integer dirruns iff this is the outermost matcher
                dirrunsUnique = ( dirruns += contextBackup == null ? 1 : Math.random() || 0.1 ),
                len = elems.length;

            if ( outermost ) {

                // Support: IE 11+, Edge 17 - 18+
                // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
                // two documents; shallow comparisons work.
                // eslint-disable-next-line eqeqeq
                outermostContext = context == document || context || outermost;
            }

            // Add elements passing elementMatchers directly to results
            // Support: IE<9, Safari
            // Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
            for ( ; i !== len && ( elem = elems[ i ] ) != null; i++ ) {
                if ( byElement && elem ) {
                    j = 0;

                    // Support: IE 11+, Edge 17 - 18+
                    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
                    // two documents; shallow comparisons work.
                    // eslint-disable-next-line eqeqeq
                    if ( !context && elem.ownerDocument != document ) {
                        setDocument( elem );
                        xml = !documentIsHTML;
                    }
                    while ( ( matcher = elementMatchers[ j++ ] ) ) {
                        if ( matcher( elem, context || document, xml ) ) {
                            results.push( elem );
                            break;
                        }
                    }
                    if ( outermost ) {
                        dirruns = dirrunsUnique;
                    }
                }

                // Track unmatched elements for set filters
                if ( bySet ) {

                    // They will have gone through all possible matchers
                    if ( ( elem = !matcher && elem ) ) {
                        matchedCount--;
                    }

                    // Lengthen the array for every element, matched or not
                    if ( seed ) {
                        unmatched.push( elem );
                    }
                }
            }

            // `i` is now the count of elements visited above, and adding it to `matchedCount`
            // makes the latter nonnegative.
            matchedCount += i;

            // Apply set filters to unmatched elements
            // NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
            // equals `i`), unless we didn't visit _any_ elements in the above loop because we have
            // no element matchers and no seed.
            // Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
            // case, which will result in a "00" `matchedCount` that differs from `i` but is also
            // numerically zero.
            if ( bySet && i !== matchedCount ) {
                j = 0;
                while ( ( matcher = setMatchers[ j++ ] ) ) {
                    matcher( unmatched, setMatched, context, xml );
                }

                if ( seed ) {

                    // Reintegrate element matches to eliminate the need for sorting
                    if ( matchedCount > 0 ) {
                        while ( i-- ) {
                            if ( !( unmatched[ i ] || setMatched[ i ] ) ) {
                                setMatched[ i ] = pop.call( results );
                            }
                        }
                    }

                    // Discard index placeholder values to get only actual matches
                    setMatched = condense( setMatched );
                }

                // Add matches to results
                push.apply( results, setMatched );

                // Seedless set matches succeeding multiple successful matchers stipulate sorting
                if ( outermost && !seed && setMatched.length > 0 &&
                    ( matchedCount + setMatchers.length ) > 1 ) {

                    Sizzle.uniqueSort( results );
                }
            }

            // Override manipulation of globals by nested matchers
            if ( outermost ) {
                dirruns = dirrunsUnique;
                outermostContext = contextBackup;
            }

            return unmatched;
        };

    return bySet ?
        markFunction( superMatcher ) :
        superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
    var i,
        setMatchers = [],
        elementMatchers = [],
        cached = compilerCache[ selector + " " ];

    if ( !cached ) {

        // Generate a function of recursive functions that can be used to check each element
        if ( !match ) {
            match = tokenize( selector );
        }
        i = match.length;
        while ( i-- ) {
            cached = matcherFromTokens( match[ i ] );
            if ( cached[ expando ] ) {
                setMatchers.push( cached );
            } else {
                elementMatchers.push( cached );
            }
        }

        // Cache the compiled function
        cached = compilerCache(
            selector,
            matcherFromGroupMatchers( elementMatchers, setMatchers )
        );

        // Save selector and tokenization
        cached.selector = selector;
    }
    return cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
    var i, tokens, token, type, find,
        compiled = typeof selector === "function" && selector,
        match = !seed && tokenize( ( selector = compiled.selector || selector ) );

    results = results || [];

    // Try to minimize operations if there is only one selector in the list and no seed
    // (the latter of which guarantees us context)
    if ( match.length === 1 ) {

        // Reduce context if the leading compound selector is an ID
        tokens = match[ 0 ] = match[ 0 ].slice( 0 );
        if ( tokens.length > 2 && ( token = tokens[ 0 ] ).type === "ID" &&
            context.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[ 1 ].type ] ) {

            context = ( Expr.find[ "ID" ]( token.matches[ 0 ]
                .replace( runescape, funescape ), context ) || [] )[ 0 ];
            if ( !context ) {
                return results;

            // Precompiled matchers will still verify ancestry, so step up a level
            } else if ( compiled ) {
                context = context.parentNode;
            }

            selector = selector.slice( tokens.shift().value.length );
        }

        // Fetch a seed set for right-to-left matching
        i = matchExpr[ "needsContext" ].test( selector ) ? 0 : tokens.length;
        while ( i-- ) {
            token = tokens[ i ];

            // Abort if we hit a combinator
            if ( Expr.relative[ ( type = token.type ) ] ) {
                break;
            }
            if ( ( find = Expr.find[ type ] ) ) {

                // Search, expanding context for leading sibling combinators
                if ( ( seed = find(
                    token.matches[ 0 ].replace( runescape, funescape ),
                    rsibling.test( tokens[ 0 ].type ) && testContext( context.parentNode ) ||
                        context
                ) ) ) {

                    // If seed is empty or no tokens remain, we can return early
                    tokens.splice( i, 1 );
                    selector = seed.length && toSelector( tokens );
                    if ( !selector ) {
                        push.apply( results, seed );
                        return results;
                    }

                    break;
                }
            }
        }
    }

    // Compile and execute a filtering function if one is not provided
    // Provide `match` to avoid retokenization if we modified the selector above
    ( compiled || compile( selector, match ) )(
        seed,
        context,
        !documentIsHTML,
        results,
        !context || rsibling.test( selector ) && testContext( context.parentNode ) || context
    );
    return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split( "" ).sort( sortOrder ).join( "" ) === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert( function( el ) {

    // Should return 1, but returns 4 (following)
    return el.compareDocumentPosition( document.createElement( "fieldset" ) ) & 1;
} );

// Support: IE<8
// Prevent attribute/property "interpolation"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert( function( el ) {
    el.innerHTML = "<a href='#'></a>";
    return el.firstChild.getAttribute( "href" ) === "#";
} ) ) {
    addHandle( "type|href|height|width", function( elem, name, isXML ) {
        if ( !isXML ) {
            return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
        }
    } );
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert( function( el ) {
    el.innerHTML = "<input/>";
    el.firstChild.setAttribute( "value", "" );
    return el.firstChild.getAttribute( "value" ) === "";
} ) ) {
    addHandle( "value", function( elem, _name, isXML ) {
        if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
            return elem.defaultValue;
        }
    } );
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert( function( el ) {
    return el.getAttribute( "disabled" ) == null;
} ) ) {
    addHandle( booleans, function( elem, name, isXML ) {
        var val;
        if ( !isXML ) {
            return elem[ name ] === true ? name.toLowerCase() :
                ( val = elem.getAttributeNode( name ) ) && val.specified ?
                    val.value :
                    null;
        }
    } );
}

return Sizzle;

} )( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
    var matched = [],
        truncate = until !== undefined;

    while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
        if ( elem.nodeType === 1 ) {
            if ( truncate && jQuery( elem ).is( until ) ) {
                break;
            }
            matched.push( elem );
        }
    }
    return matched;
};


var siblings = function( n, elem ) {
    var matched = [];

    for ( ; n; n = n.nextSibling ) {
        if ( n.nodeType === 1 && n !== elem ) {
            matched.push( n );
        }
    }

    return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};
var rsingleTag = ( /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
    if ( isFunction( qualifier ) ) {
        return jQuery.grep( elements, function( elem, i ) {
            return !!qualifier.call( elem, i, elem ) !== not;
        } );
    }

    // Single element
    if ( qualifier.nodeType ) {
        return jQuery.grep( elements, function( elem ) {
            return ( elem === qualifier ) !== not;
        } );
    }

    // Arraylike of elements (jQuery, arguments, Array)
    if ( typeof qualifier !== "string" ) {
        return jQuery.grep( elements, function( elem ) {
            return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
        } );
    }

    // Filtered directly for both simple and complex selectors
    return jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
    var elem = elems[ 0 ];

    if ( not ) {
        expr = ":not(" + expr + ")";
    }

    if ( elems.length === 1 && elem.nodeType === 1 ) {
        return jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
    }

    return jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
        return elem.nodeType === 1;
    } ) );
};

jQuery.fn.extend( {
    find: function( selector ) {
        var i, ret,
            len = this.length,
            self = this;

        if ( typeof selector !== "string" ) {
            return this.pushStack( jQuery( selector ).filter( function() {
                for ( i = 0; i < len; i++ ) {
                    if ( jQuery.contains( self[ i ], this ) ) {
                        return true;
                    }
                }
            } ) );
        }

        ret = this.pushStack( [] );

        for ( i = 0; i < len; i++ ) {
            jQuery.find( selector, self[ i ], ret );
        }

        return len > 1 ? jQuery.uniqueSort( ret ) : ret;
    },
    filter: function( selector ) {
        return this.pushStack( winnow( this, selector || [], false ) );
    },
    not: function( selector ) {
        return this.pushStack( winnow( this, selector || [], true ) );
    },
    is: function( selector ) {
        return !!winnow(
            this,

            // If this is a positional/relative selector, check membership in the returned set
            // so $("p:first").is("p:last") won't return true for a doc with two "p".
            typeof selector === "string" && rneedsContext.test( selector ) ?
                jQuery( selector ) :
                selector || [],
            false
        ).length;
    }
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

    // A simple way to check for HTML strings
    // Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
    // Strict HTML recognition (#11290: must start with <)
    // Shortcut simple #id case for speed
    rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,

    init = jQuery.fn.init = function( selector, context, root ) {
        var match, elem;

        // HANDLE: $(""), $(null), $(undefined), $(false)
        if ( !selector ) {
            return this;
        }

        // Method init() accepts an alternate rootjQuery
        // so migrate can support jQuery.sub (gh-2101)
        root = root || rootjQuery;

        // Handle HTML strings
        if ( typeof selector === "string" ) {
            if ( selector[ 0 ] === "<" &&
                selector[ selector.length - 1 ] === ">" &&
                selector.length >= 3 ) {

                // Assume that strings that start and end with <> are HTML and skip the regex check
                match = [ null, selector, null ];

            } else {
                match = rquickExpr.exec( selector );
            }

            // Match html or make sure no context is specified for #id
            if ( match && ( match[ 1 ] || !context ) ) {

                // HANDLE: $(html) -> $(array)
                if ( match[ 1 ] ) {
                    context = context instanceof jQuery ? context[ 0 ] : context;

                    // Option to run scripts is true for back-compat
                    // Intentionally let the error be thrown if parseHTML is not present
                    jQuery.merge( this, jQuery.parseHTML(
                        match[ 1 ],
                        context && context.nodeType ? context.ownerDocument || context : document,
                        true
                    ) );

                    // HANDLE: $(html, props)
                    if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
                        for ( match in context ) {

                            // Properties of context are called as methods if possible
                            if ( isFunction( this[ match ] ) ) {
                                this[ match ]( context[ match ] );

                            // ...and otherwise set as attributes
                            } else {
                                this.attr( match, context[ match ] );
                            }
                        }
                    }

                    return this;

                // HANDLE: $(#id)
                } else {
                    elem = document.getElementById( match[ 2 ] );

                    if ( elem ) {

                        // Inject the element directly into the jQuery object
                        this[ 0 ] = elem;
                        this.length = 1;
                    }
                    return this;
                }

            // HANDLE: $(expr, $(...))
            } else if ( !context || context.jquery ) {
                return ( context || root ).find( selector );

            // HANDLE: $(expr, context)
            // (which is just equivalent to: $(context).find(expr)
            } else {
                return this.constructor( context ).find( selector );
            }

        // HANDLE: $(DOMElement)
        } else if ( selector.nodeType ) {
            this[ 0 ] = selector;
            this.length = 1;
            return this;

        // HANDLE: $(function)
        // Shortcut for document ready
        } else if ( isFunction( selector ) ) {
            return root.ready !== undefined ?
                root.ready( selector ) :

                // Execute immediately if ready is not present
                selector( jQuery );
        }

        return jQuery.makeArray( selector, this );
    };

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

    // Methods guaranteed to produce a unique set when starting from a unique set
    guaranteedUnique = {
        children: true,
        contents: true,
        next: true,
        prev: true
    };

jQuery.fn.extend( {
    has: function( target ) {
        var targets = jQuery( target, this ),
            l = targets.length;

        return this.filter( function() {
            var i = 0;
            for ( ; i < l; i++ ) {
                if ( jQuery.contains( this, targets[ i ] ) ) {
                    return true;
                }
            }
        } );
    },

    closest: function( selectors, context ) {
        var cur,
            i = 0,
            l = this.length,
            matched = [],
            targets = typeof selectors !== "string" && jQuery( selectors );

        // Positional selectors never match, since there's no _selection_ context
        if ( !rneedsContext.test( selectors ) ) {
            for ( ; i < l; i++ ) {
                for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

                    // Always skip document fragments
                    if ( cur.nodeType < 11 && ( targets ?
                        targets.index( cur ) > -1 :

                        // Don't pass non-elements to Sizzle
                        cur.nodeType === 1 &&
                            jQuery.find.matchesSelector( cur, selectors ) ) ) {

                        matched.push( cur );
                        break;
                    }
                }
            }
        }

        return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
    },

    // Determine the position of an element within the set
    index: function( elem ) {

        // No argument, return index in parent
        if ( !elem ) {
            return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
        }

        // Index in selector
        if ( typeof elem === "string" ) {
            return indexOf.call( jQuery( elem ), this[ 0 ] );
        }

        // Locate the position of the desired element
        return indexOf.call( this,

            // If it receives a jQuery object, the first element is used
            elem.jquery ? elem[ 0 ] : elem
        );
    },

    add: function( selector, context ) {
        return this.pushStack(
            jQuery.uniqueSort(
                jQuery.merge( this.get(), jQuery( selector, context ) )
            )
        );
    },

    addBack: function( selector ) {
        return this.add( selector == null ?
            this.prevObject : this.prevObject.filter( selector )
        );
    }
} );

function sibling( cur, dir ) {
    while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
    return cur;
}

jQuery.each( {
    parent: function( elem ) {
        var parent = elem.parentNode;
        return parent && parent.nodeType !== 11 ? parent : null;
    },
    parents: function( elem ) {
        return dir( elem, "parentNode" );
    },
    parentsUntil: function( elem, _i, until ) {
        return dir( elem, "parentNode", until );
    },
    next: function( elem ) {
        return sibling( elem, "nextSibling" );
    },
    prev: function( elem ) {
        return sibling( elem, "previousSibling" );
    },
    nextAll: function( elem ) {
        return dir( elem, "nextSibling" );
    },
    prevAll: function( elem ) {
        return dir( elem, "previousSibling" );
    },
    nextUntil: function( elem, _i, until ) {
        return dir( elem, "nextSibling", until );
    },
    prevUntil: function( elem, _i, until ) {
        return dir( elem, "previousSibling", until );
    },
    siblings: function( elem ) {
        return siblings( ( elem.parentNode || {} ).firstChild, elem );
    },
    children: function( elem ) {
        return siblings( elem.firstChild );
    },
    contents: function( elem ) {
        if ( elem.contentDocument != null &&

            // Support: IE 11+
            // <object> elements with no `data` attribute has an object
            // `contentDocument` with a `null` prototype.
            getProto( elem.contentDocument ) ) {

            return elem.contentDocument;
        }

        // Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
        // Treat the template element as a regular one in browsers that
        // don't support it.
        if ( nodeName( elem, "template" ) ) {
            elem = elem.content || elem;
        }

        return jQuery.merge( [], elem.childNodes );
    }
}, function( name, fn ) {
    jQuery.fn[ name ] = function( until, selector ) {
        var matched = jQuery.map( this, fn, until );

        if ( name.slice( -5 ) !== "Until" ) {
            selector = until;
        }

        if ( selector && typeof selector === "string" ) {
            matched = jQuery.filter( selector, matched );
        }

        if ( this.length > 1 ) {

            // Remove duplicates
            if ( !guaranteedUnique[ name ] ) {
                jQuery.uniqueSort( matched );
            }

            // Reverse order for parents* and prev-derivatives
            if ( rparentsprev.test( name ) ) {
                matched.reverse();
            }
        }

        return this.pushStack( matched );
    };
} );
var rnothtmlwhite = ( /[^\x20\t\r\n\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
    var object = {};
    jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
        object[ flag ] = true;
    } );
    return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *  options: an optional list of space-separated options that will change how
 *          the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *  once:           will ensure the callback list can only be fired once (like a Deferred)
 *
 *  memory:         will keep track of previous values and will call any callback added
 *                  after the list has been fired right away with the latest "memorized"
 *                  values (like a Deferred)
 *
 *  unique:         will ensure a callback can only be added once (no duplicate in the list)
 *
 *  stopOnFalse:    interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

    // Convert options from String-formatted to Object-formatted if needed
    // (we check in cache first)
    options = typeof options === "string" ?
        createOptions( options ) :
        jQuery.extend( {}, options );

    var // Flag to know if list is currently firing
        firing,

        // Last fire value for non-forgettable lists
        memory,

        // Flag to know if list was already fired
        fired,

        // Flag to prevent firing
        locked,

        // Actual callback list
        list = [],

        // Queue of execution data for repeatable lists
        queue = [],

        // Index of currently firing callback (modified by add/remove as needed)
        firingIndex = -1,

        // Fire callbacks
        fire = function() {

            // Enforce single-firing
            locked = locked || options.once;

            // Execute callbacks for all pending executions,
            // respecting firingIndex overrides and runtime changes
            fired = firing = true;
            for ( ; queue.length; firingIndex = -1 ) {
                memory = queue.shift();
                while ( ++firingIndex < list.length ) {

                    // Run callback and check for early termination
                    if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
                        options.stopOnFalse ) {

                        // Jump to end and forget the data so .add doesn't re-fire
                        firingIndex = list.length;
                        memory = false;
                    }
                }
            }

            // Forget the data if we're done with it
            if ( !options.memory ) {
                memory = false;
            }

            firing = false;

            // Clean up if we're done firing for good
            if ( locked ) {

                // Keep an empty list if we have data for future add calls
                if ( memory ) {
                    list = [];

                // Otherwise, this object is spent
                } else {
                    list = "";
                }
            }
        },

        // Actual Callbacks object
        self = {

            // Add a callback or a collection of callbacks to the list
            add: function() {
                if ( list ) {

                    // If we have memory from a past run, we should fire after adding
                    if ( memory && !firing ) {
                        firingIndex = list.length - 1;
                        queue.push( memory );
                    }

                    ( function add( args ) {
                        jQuery.each( args, function( _, arg ) {
                            if ( isFunction( arg ) ) {
                                if ( !options.unique || !self.has( arg ) ) {
                                    list.push( arg );
                                }
                            } else if ( arg && arg.length && toType( arg ) !== "string" ) {

                                // Inspect recursively
                                add( arg );
                            }
                        } );
                    } )( arguments );

                    if ( memory && !firing ) {
                        fire();
                    }
                }
                return this;
            },

            // Remove a callback from the list
            remove: function() {
                jQuery.each( arguments, function( _, arg ) {
                    var index;
                    while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
                        list.splice( index, 1 );

                        // Handle firing indexes
                        if ( index <= firingIndex ) {
                            firingIndex--;
                        }
                    }
                } );
                return this;
            },

            // Check if a given callback is in the list.
            // If no argument is given, return whether or not list has callbacks attached.
            has: function( fn ) {
                return fn ?
                    jQuery.inArray( fn, list ) > -1 :
                    list.length > 0;
            },

            // Remove all callbacks from the list
            empty: function() {
                if ( list ) {
                    list = [];
                }
                return this;
            },

            // Disable .fire and .add
            // Abort any current/pending executions
            // Clear all callbacks and values
            disable: function() {
                locked = queue = [];
                list = memory = "";
                return this;
            },
            disabled: function() {
                return !list;
            },

            // Disable .fire
            // Also disable .add unless we have memory (since it would have no effect)
            // Abort any pending executions
            lock: function() {
                locked = queue = [];
                if ( !memory && !firing ) {
                    list = memory = "";
                }
                return this;
            },
            locked: function() {
                return !!locked;
            },

            // Call all callbacks with the given context and arguments
            fireWith: function( context, args ) {
                if ( !locked ) {
                    args = args || [];
                    args = [ context, args.slice ? args.slice() : args ];
                    queue.push( args );
                    if ( !firing ) {
                        fire();
                    }
                }
                return this;
            },

            // Call all the callbacks with the given arguments
            fire: function() {
                self.fireWith( this, arguments );
                return this;
            },

            // To know if the callbacks have already been called at least once
            fired: function() {
                return !!fired;
            }
        };

    return self;
};


function Identity( v ) {
    return v;
}
function Thrower( ex ) {
    throw ex;
}

function adoptValue( value, resolve, reject, noValue ) {
    var method;

    try {

        // Check for promise aspect first to privilege synchronous behavior
        if ( value && isFunction( ( method = value.promise ) ) ) {
            method.call( value ).done( resolve ).fail( reject );

        // Other thenables
        } else if ( value && isFunction( ( method = value.then ) ) ) {
            method.call( value, resolve, reject );

        // Other non-thenables
        } else {

            // Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
            // * false: [ value ].slice( 0 ) => resolve( value )
            // * true: [ value ].slice( 1 ) => resolve()
            resolve.apply( undefined, [ value ].slice( noValue ) );
        }

    // For Promises/A+, convert exceptions into rejections
    // Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
    // Deferred#then to conditionally suppress rejection.
    } catch ( value ) {

        // Support: Android 4.0 only
        // Strict mode functions invoked without .call/.apply get global-object context
        reject.apply( undefined, [ value ] );
    }
}

jQuery.extend( {

    Deferred: function( func ) {
        var tuples = [

                // action, add listener, callbacks,
                // ... .then handlers, argument index, [final state]
                [ "notify", "progress", jQuery.Callbacks( "memory" ),
                    jQuery.Callbacks( "memory" ), 2 ],
                [ "resolve", "done", jQuery.Callbacks( "once memory" ),
                    jQuery.Callbacks( "once memory" ), 0, "resolved" ],
                [ "reject", "fail", jQuery.Callbacks( "once memory" ),
                    jQuery.Callbacks( "once memory" ), 1, "rejected" ]
            ],
            state = "pending",
            promise = {
                state: function() {
                    return state;
                },
                always: function() {
                    deferred.done( arguments ).fail( arguments );
                    return this;
                },
                "catch": function( fn ) {
                    return promise.then( null, fn );
                },

                // Keep pipe for back-compat
                pipe: function( /* fnDone, fnFail, fnProgress */ ) {
                    var fns = arguments;

                    return jQuery.Deferred( function( newDefer ) {
                        jQuery.each( tuples, function( _i, tuple ) {

                            // Map tuples (progress, done, fail) to arguments (done, fail, progress)
                            var fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

                            // deferred.progress(function() { bind to newDefer or newDefer.notify })
                            // deferred.done(function() { bind to newDefer or newDefer.resolve })
                            // deferred.fail(function() { bind to newDefer or newDefer.reject })
                            deferred[ tuple[ 1 ] ]( function() {
                                var returned = fn && fn.apply( this, arguments );
                                if ( returned && isFunction( returned.promise ) ) {
                                    returned.promise()
                                        .progress( newDefer.notify )
                                        .done( newDefer.resolve )
                                        .fail( newDefer.reject );
                                } else {
                                    newDefer[ tuple[ 0 ] + "With" ](
                                        this,
                                        fn ? [ returned ] : arguments
                                    );
                                }
                            } );
                        } );
                        fns = null;
                    } ).promise();
                },
                then: function( onFulfilled, onRejected, onProgress ) {
                    var maxDepth = 0;
                    function resolve( depth, deferred, handler, special ) {
                        return function() {
                            var that = this,
                                args = arguments,
                                mightThrow = function() {
                                    var returned, then;

                                    // Support: Promises/A+ section 2.3.3.3.3
                                    // https://promisesaplus.com/#point-59
                                    // Ignore double-resolution attempts
                                    if ( depth < maxDepth ) {
                                        return;
                                    }

                                    returned = handler.apply( that, args );

                                    // Support: Promises/A+ section 2.3.1
                                    // https://promisesaplus.com/#point-48
                                    if ( returned === deferred.promise() ) {
                                        throw new TypeError( "Thenable self-resolution" );
                                    }

                                    // Support: Promises/A+ sections 2.3.3.1, 3.5
                                    // https://promisesaplus.com/#point-54
                                    // https://promisesaplus.com/#point-75
                                    // Retrieve `then` only once
                                    then = returned &&

                                        // Support: Promises/A+ section 2.3.4
                                        // https://promisesaplus.com/#point-64
                                        // Only check objects and functions for thenability
                                        ( typeof returned === "object" ||
                                            typeof returned === "function" ) &&
                                        returned.then;

                                    // Handle a returned thenable
                                    if ( isFunction( then ) ) {

                                        // Special processors (notify) just wait for resolution
                                        if ( special ) {
                                            then.call(
                                                returned,
                                                resolve( maxDepth, deferred, Identity, special ),
                                                resolve( maxDepth, deferred, Thrower, special )
                                            );

                                        // Normal processors (resolve) also hook into progress
                                        } else {

                                            // ...and disregard older resolution values
                                            maxDepth++;

                                            then.call(
                                                returned,
                                                resolve( maxDepth, deferred, Identity, special ),
                                                resolve( maxDepth, deferred, Thrower, special ),
                                                resolve( maxDepth, deferred, Identity,
                                                    deferred.notifyWith )
                                            );
                                        }

                                    // Handle all other returned values
                                    } else {

                                        // Only substitute handlers pass on context
                                        // and multiple values (non-spec behavior)
                                        if ( handler !== Identity ) {
                                            that = undefined;
                                            args = [ returned ];
                                        }

                                        // Process the value(s)
                                        // Default process is resolve
                                        ( special || deferred.resolveWith )( that, args );
                                    }
                                },

                                // Only normal processors (resolve) catch and reject exceptions
                                process = special ?
                                    mightThrow :
                                    function() {
                                        try {
                                            mightThrow();
                                        } catch ( e ) {

                                            if ( jQuery.Deferred.exceptionHook ) {
                                                jQuery.Deferred.exceptionHook( e,
                                                    process.stackTrace );
                                            }

                                            // Support: Promises/A+ section 2.3.3.3.4.1
                                            // https://promisesaplus.com/#point-61
                                            // Ignore post-resolution exceptions
                                            if ( depth + 1 >= maxDepth ) {

                                                // Only substitute handlers pass on context
                                                // and multiple values (non-spec behavior)
                                                if ( handler !== Thrower ) {
                                                    that = undefined;
                                                    args = [ e ];
                                                }

                                                deferred.rejectWith( that, args );
                                            }
                                        }
                                    };

                            // Support: Promises/A+ section 2.3.3.3.1
                            // https://promisesaplus.com/#point-57
                            // Re-resolve promises immediately to dodge false rejection from
                            // subsequent errors
                            if ( depth ) {
                                process();
                            } else {

                                // Call an optional hook to record the stack, in case of exception
                                // since it's otherwise lost when execution goes async
                                if ( jQuery.Deferred.getStackHook ) {
                                    process.stackTrace = jQuery.Deferred.getStackHook();
                                }
                                window.setTimeout( process );
                            }
                        };
                    }

                    return jQuery.Deferred( function( newDefer ) {

                        // progress_handlers.add( ... )
                        tuples[ 0 ][ 3 ].add(
                            resolve(
                                0,
                                newDefer,
                                isFunction( onProgress ) ?
                                    onProgress :
                                    Identity,
                                newDefer.notifyWith
                            )
                        );

                        // fulfilled_handlers.add( ... )
                        tuples[ 1 ][ 3 ].add(
                            resolve(
                                0,
                                newDefer,
                                isFunction( onFulfilled ) ?
                                    onFulfilled :
                                    Identity
                            )
                        );

                        // rejected_handlers.add( ... )
                        tuples[ 2 ][ 3 ].add(
                            resolve(
                                0,
                                newDefer,
                                isFunction( onRejected ) ?
                                    onRejected :
                                    Thrower
                            )
                        );
                    } ).promise();
                },

                // Get a promise for this deferred
                // If obj is provided, the promise aspect is added to the object
                promise: function( obj ) {
                    return obj != null ? jQuery.extend( obj, promise ) : promise;
                }
            },
            deferred = {};

        // Add list-specific methods
        jQuery.each( tuples, function( i, tuple ) {
            var list = tuple[ 2 ],
                stateString = tuple[ 5 ];

            // promise.progress = list.add
            // promise.done = list.add
            // promise.fail = list.add
            promise[ tuple[ 1 ] ] = list.add;

            // Handle state
            if ( stateString ) {
                list.add(
                    function() {

                        // state = "resolved" (i.e., fulfilled)
                        // state = "rejected"
                        state = stateString;
                    },

                    // rejected_callbacks.disable
                    // fulfilled_callbacks.disable
                    tuples[ 3 - i ][ 2 ].disable,

                    // rejected_handlers.disable
                    // fulfilled_handlers.disable
                    tuples[ 3 - i ][ 3 ].disable,

                    // progress_callbacks.lock
                    tuples[ 0 ][ 2 ].lock,

                    // progress_handlers.lock
                    tuples[ 0 ][ 3 ].lock
                );
            }

            // progress_handlers.fire
            // fulfilled_handlers.fire
            // rejected_handlers.fire
            list.add( tuple[ 3 ].fire );

            // deferred.notify = function() { deferred.notifyWith(...) }
            // deferred.resolve = function() { deferred.resolveWith(...) }
            // deferred.reject = function() { deferred.rejectWith(...) }
            deferred[ tuple[ 0 ] ] = function() {
                deferred[ tuple[ 0 ] + "With" ]( this === deferred ? undefined : this, arguments );
                return this;
            };

            // deferred.notifyWith = list.fireWith
            // deferred.resolveWith = list.fireWith
            // deferred.rejectWith = list.fireWith
            deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
        } );

        // Make the deferred a promise
        promise.promise( deferred );

        // Call given func if any
        if ( func ) {
            func.call( deferred, deferred );
        }

        // All done!
        return deferred;
    },

    // Deferred helper
    when: function( singleValue ) {
        var

            // count of uncompleted subordinates
            remaining = arguments.length,

            // count of unprocessed arguments
            i = remaining,

            // subordinate fulfillment data
            resolveContexts = Array( i ),
            resolveValues = slice.call( arguments ),

            // the master Deferred
            master = jQuery.Deferred(),

            // subordinate callback factory
            updateFunc = function( i ) {
                return function( value ) {
                    resolveContexts[ i ] = this;
                    resolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
                    if ( !( --remaining ) ) {
                        master.resolveWith( resolveContexts, resolveValues );
                    }
                };
            };

        // Single- and empty arguments are adopted like Promise.resolve
        if ( remaining <= 1 ) {
            adoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
                !remaining );

            // Use .then() to unwrap secondary thenables (cf. gh-3000)
            if ( master.state() === "pending" ||
                isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

                return master.then();
            }
        }

        // Multiple arguments are aggregated like Promise.all array elements
        while ( i-- ) {
            adoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
        }

        return master.promise();
    }
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

    // Support: IE 8 - 9 only
    // Console exists when dev tools are open, which can happen at any time
    if ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
        window.console.warn( "jQuery.Deferred exception: " + error.message, error.stack, stack );
    }
};




jQuery.readyException = function( error ) {
    window.setTimeout( function() {
        throw error;
    } );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

    readyList
        .then( fn )

        // Wrap jQuery.readyException in a function so that the lookup
        // happens at the time of error handling instead of callback
        // registration.
        .catch( function( error ) {
            jQuery.readyException( error );
        } );

    return this;
};

jQuery.extend( {

    // Is the DOM ready to be used? Set to true once it occurs.
    isReady: false,

    // A counter to track how many items to wait for before
    // the ready event fires. See #6781
    readyWait: 1,

    // Handle when the DOM is ready
    ready: function( wait ) {

        // Abort if there are pending holds or we're already ready
        if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
            return;
        }

        // Remember that the DOM is ready
        jQuery.isReady = true;

        // If a normal DOM Ready event fired, decrement, and wait if need be
        if ( wait !== true && --jQuery.readyWait > 0 ) {
            return;
        }

        // If there are functions bound, to execute
        readyList.resolveWith( document, [ jQuery ] );
    }
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
    document.removeEventListener( "DOMContentLoaded", completed );
    window.removeEventListener( "load", completed );
    jQuery.ready();
}

// Catch cases where $(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals "interactive" too soon
if ( document.readyState === "complete" ||
    ( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

    // Handle it asynchronously to allow scripts the opportunity to delay ready
    window.setTimeout( jQuery.ready );

} else {

    // Use the handy event callback
    document.addEventListener( "DOMContentLoaded", completed );

    // A fallback to window.onload, that will always work
    window.addEventListener( "load", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
    var i = 0,
        len = elems.length,
        bulk = key == null;

    // Sets many values
    if ( toType( key ) === "object" ) {
        chainable = true;
        for ( i in key ) {
            access( elems, fn, i, key[ i ], true, emptyGet, raw );
        }

    // Sets one value
    } else if ( value !== undefined ) {
        chainable = true;

        if ( !isFunction( value ) ) {
            raw = true;
        }

        if ( bulk ) {

            // Bulk operations run against the entire set
            if ( raw ) {
                fn.call( elems, value );
                fn = null;

            // ...except when executing function values
            } else {
                bulk = fn;
                fn = function( elem, _key, value ) {
                    return bulk.call( jQuery( elem ), value );
                };
            }
        }

        if ( fn ) {
            for ( ; i < len; i++ ) {
                fn(
                    elems[ i ], key, raw ?
                    value :
                    value.call( elems[ i ], i, fn( elems[ i ], key ) )
                );
            }
        }
    }

    if ( chainable ) {
        return elems;
    }

    // Gets
    if ( bulk ) {
        return fn.call( elems );
    }

    return len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
    rdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( _all, letter ) {
    return letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
    return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

    // Accepts only:
    //  - Node
    //    - Node.ELEMENT_NODE
    //    - Node.DOCUMENT_NODE
    //  - Object
    //    - Any
    return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
    this.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

    cache: function( owner ) {

        // Check if the owner object already has a cache
        var value = owner[ this.expando ];

        // If not, create one
        if ( !value ) {
            value = {};

            // We can accept data for non-element nodes in modern browsers,
            // but we should not, see #8335.
            // Always return an empty object.
            if ( acceptData( owner ) ) {

                // If it is a node unlikely to be stringify-ed or looped over
                // use plain assignment
                if ( owner.nodeType ) {
                    owner[ this.expando ] = value;

                // Otherwise secure it in a non-enumerable property
                // configurable must be true to allow the property to be
                // deleted when data is removed
                } else {
                    Object.defineProperty( owner, this.expando, {
                        value: value,
                        configurable: true
                    } );
                }
            }
        }

        return value;
    },
    set: function( owner, data, value ) {
        var prop,
            cache = this.cache( owner );

        // Handle: [ owner, key, value ] args
        // Always use camelCase key (gh-2257)
        if ( typeof data === "string" ) {
            cache[ camelCase( data ) ] = value;

        // Handle: [ owner, { properties } ] args
        } else {

            // Copy the properties one-by-one to the cache object
            for ( prop in data ) {
                cache[ camelCase( prop ) ] = data[ prop ];
            }
        }
        return cache;
    },
    get: function( owner, key ) {
        return key === undefined ?
            this.cache( owner ) :

            // Always use camelCase key (gh-2257)
            owner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
    },
    access: function( owner, key, value ) {

        // In cases where either:
        //
        //   1. No key was specified
        //   2. A string key was specified, but no value provided
        //
        // Take the "read" path and allow the get method to determine
        // which value to return, respectively either:
        //
        //   1. The entire cache object
        //   2. The data stored at the key
        //
        if ( key === undefined ||
                ( ( key && typeof key === "string" ) && value === undefined ) ) {

            return this.get( owner, key );
        }

        // When the key is not a string, or both a key and value
        // are specified, set or extend (existing objects) with either:
        //
        //   1. An object of properties
        //   2. A key and value
        //
        this.set( owner, key, value );

        // Since the "set" path can have two possible entry points
        // return the expected data based on which path was taken[*]
        return value !== undefined ? value : key;
    },
    remove: function( owner, key ) {
        var i,
            cache = owner[ this.expando ];

        if ( cache === undefined ) {
            return;
        }

        if ( key !== undefined ) {

            // Support array or space separated string of keys
            if ( Array.isArray( key ) ) {

                // If key is an array of keys...
                // We always set camelCase keys, so remove that.
                key = key.map( camelCase );
            } else {
                key = camelCase( key );

                // If a key with the spaces exists, use it.
                // Otherwise, create an array by matching non-whitespace
                key = key in cache ?
                    [ key ] :
                    ( key.match( rnothtmlwhite ) || [] );
            }

            i = key.length;

            while ( i-- ) {
                delete cache[ key[ i ] ];
            }
        }

        // Remove the expando if there's no more data
        if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

            // Support: Chrome <=35 - 45
            // Webkit & Blink performance suffers when deleting properties
            // from DOM nodes, so set to undefined instead
            // https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
            if ( owner.nodeType ) {
                owner[ this.expando ] = undefined;
            } else {
                delete owner[ this.expando ];
            }
        }
    },
    hasData: function( owner ) {
        var cache = owner[ this.expando ];
        return cache !== undefined && !jQuery.isEmptyObject( cache );
    }
};
var dataPriv = new Data();

var dataUser = new Data();



//  Implementation Summary
//
//  1. Enforce API surface and semantic compatibility with 1.9.x branch
//  2. Improve the module's maintainability by reducing the storage
//      paths to a single mechanism.
//  3. Use the same single mechanism to support "private" and "user" data.
//  4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
//  5. Avoid exposing implementation details on user objects (eg. expando properties)
//  6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
    rmultiDash = /[A-Z]/g;

function getData( data ) {
    if ( data === "true" ) {
        return true;
    }

    if ( data === "false" ) {
        return false;
    }

    if ( data === "null" ) {
        return null;
    }

    // Only convert to a number if it doesn't change the string
    if ( data === +data + "" ) {
        return +data;
    }

    if ( rbrace.test( data ) ) {
        return JSON.parse( data );
    }

    return data;
}

function dataAttr( elem, key, data ) {
    var name;

    // If nothing was found internally, try to fetch any
    // data from the HTML5 data-* attribute
    if ( data === undefined && elem.nodeType === 1 ) {
        name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
        data = elem.getAttribute( name );

        if ( typeof data === "string" ) {
            try {
                data = getData( data );
            } catch ( e ) {}

            // Make sure we set the data so it isn't changed later
            dataUser.set( elem, key, data );
        } else {
            data = undefined;
        }
    }
    return data;
}

jQuery.extend( {
    hasData: function( elem ) {
        return dataUser.hasData( elem ) || dataPriv.hasData( elem );
    },

    data: function( elem, name, data ) {
        return dataUser.access( elem, name, data );
    },

    removeData: function( elem, name ) {
        dataUser.remove( elem, name );
    },

    // TODO: Now that all calls to _data and _removeData have been replaced
    // with direct calls to dataPriv methods, these can be deprecated.
    _data: function( elem, name, data ) {
        return dataPriv.access( elem, name, data );
    },

    _removeData: function( elem, name ) {
        dataPriv.remove( elem, name );
    }
} );

jQuery.fn.extend( {
    data: function( key, value ) {
        var i, name, data,
            elem = this[ 0 ],
            attrs = elem && elem.attributes;

        // Gets all values
        if ( key === undefined ) {
            if ( this.length ) {
                data = dataUser.get( elem );

                if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
                    i = attrs.length;
                    while ( i-- ) {

                        // Support: IE 11 only
                        // The attrs elements can be null (#14894)
                        if ( attrs[ i ] ) {
                            name = attrs[ i ].name;
                            if ( name.indexOf( "data-" ) === 0 ) {
                                name = camelCase( name.slice( 5 ) );
                                dataAttr( elem, name, data[ name ] );
                            }
                        }
                    }
                    dataPriv.set( elem, "hasDataAttrs", true );
                }
            }

            return data;
        }

        // Sets multiple values
        if ( typeof key === "object" ) {
            return this.each( function() {
                dataUser.set( this, key );
            } );
        }

        return access( this, function( value ) {
            var data;

            // The calling jQuery object (element matches) is not empty
            // (and therefore has an element appears at this[ 0 ]) and the
            // `value` parameter was not undefined. An empty jQuery object
            // will result in `undefined` for elem = this[ 0 ] which will
            // throw an exception if an attempt to read a data cache is made.
            if ( elem && value === undefined ) {

                // Attempt to get data from the cache
                // The key will always be camelCased in Data
                data = dataUser.get( elem, key );
                if ( data !== undefined ) {
                    return data;
                }

                // Attempt to "discover" the data in
                // HTML5 custom data-* attrs
                data = dataAttr( elem, key );
                if ( data !== undefined ) {
                    return data;
                }

                // We tried really hard, but the data doesn't exist.
                return;
            }

            // Set the data...
            this.each( function() {

                // We always store the camelCased key
                dataUser.set( this, key, value );
            } );
        }, null, value, arguments.length > 1, null, true );
    },

    removeData: function( key ) {
        return this.each( function() {
            dataUser.remove( this, key );
        } );
    }
} );


jQuery.extend( {
    queue: function( elem, type, data ) {
        var queue;

        if ( elem ) {
            type = ( type || "fx" ) + "queue";
            queue = dataPriv.get( elem, type );

            // Speed up dequeue by getting out quickly if this is just a lookup
            if ( data ) {
                if ( !queue || Array.isArray( data ) ) {
                    queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
                } else {
                    queue.push( data );
                }
            }
            return queue || [];
        }
    },

    dequeue: function( elem, type ) {
        type = type || "fx";

        var queue = jQuery.queue( elem, type ),
            startLength = queue.length,
            fn = queue.shift(),
            hooks = jQuery._queueHooks( elem, type ),
            next = function() {
                jQuery.dequeue( elem, type );
            };

        // If the fx queue is dequeued, always remove the progress sentinel
        if ( fn === "inprogress" ) {
            fn = queue.shift();
            startLength--;
        }

        if ( fn ) {

            // Add a progress sentinel to prevent the fx queue from being
            // automatically dequeued
            if ( type === "fx" ) {
                queue.unshift( "inprogress" );
            }

            // Clear up the last queue stop function
            delete hooks.stop;
            fn.call( elem, next, hooks );
        }

        if ( !startLength && hooks ) {
            hooks.empty.fire();
        }
    },

    // Not public - generate a queueHooks object, or return the current one
    _queueHooks: function( elem, type ) {
        var key = type + "queueHooks";
        return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
            empty: jQuery.Callbacks( "once memory" ).add( function() {
                dataPriv.remove( elem, [ type + "queue", key ] );
            } )
        } );
    }
} );

jQuery.fn.extend( {
    queue: function( type, data ) {
        var setter = 2;

        if ( typeof type !== "string" ) {
            data = type;
            type = "fx";
            setter--;
        }

        if ( arguments.length < setter ) {
            return jQuery.queue( this[ 0 ], type );
        }

        return data === undefined ?
            this :
            this.each( function() {
                var queue = jQuery.queue( this, type, data );

                // Ensure a hooks for this queue
                jQuery._queueHooks( this, type );

                if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
                    jQuery.dequeue( this, type );
                }
            } );
    },
    dequeue: function( type ) {
        return this.each( function() {
            jQuery.dequeue( this, type );
        } );
    },
    clearQueue: function( type ) {
        return this.queue( type || "fx", [] );
    },

    // Get a promise resolved when queues of a certain type
    // are emptied (fx is the type by default)
    promise: function( type, obj ) {
        var tmp,
            count = 1,
            defer = jQuery.Deferred(),
            elements = this,
            i = this.length,
            resolve = function() {
                if ( !( --count ) ) {
                    defer.resolveWith( elements, [ elements ] );
                }
            };

        if ( typeof type !== "string" ) {
            obj = type;
            type = undefined;
        }
        type = type || "fx";

        while ( i-- ) {
            tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
            if ( tmp && tmp.empty ) {
                count++;
                tmp.empty.add( resolve );
            }
        }
        resolve();
        return defer.promise( obj );
    }
} );
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var documentElement = document.documentElement;



    var isAttached = function( elem ) {
            return jQuery.contains( elem.ownerDocument, elem );
        },
        composed = { composed: true };

    // Support: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 only
    // Check attachment across shadow DOM boundaries when possible (gh-3504)
    // Support: iOS 10.0-10.2 only
    // Early iOS 10 versions support `attachShadow` but not `getRootNode`,
    // leading to errors. We need to check for `getRootNode`.
    if ( documentElement.getRootNode ) {
        isAttached = function( elem ) {
            return jQuery.contains( elem.ownerDocument, elem ) ||
                elem.getRootNode( composed ) === elem.ownerDocument;
        };
    }
var isHiddenWithinTree = function( elem, el ) {

        // isHiddenWithinTree might be called from jQuery#filter function;
        // in that case, element will be second argument
        elem = el || elem;

        // Inline style trumps all
        return elem.style.display === "none" ||
            elem.style.display === "" &&

            // Otherwise, check computed style
            // Support: Firefox <=43 - 45
            // Disconnected elements can have computed display: none, so first confirm that elem is
            // in the document.
            isAttached( elem ) &&

            jQuery.css( elem, "display" ) === "none";
    };



function adjustCSS( elem, prop, valueParts, tween ) {
    var adjusted, scale,
        maxIterations = 20,
        currentValue = tween ?
            function() {
                return tween.cur();
            } :
            function() {
                return jQuery.css( elem, prop, "" );
            },
        initial = currentValue(),
        unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

        // Starting value computation is required for potential unit mismatches
        initialInUnit = elem.nodeType &&
            ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
            rcssNum.exec( jQuery.css( elem, prop ) );

    if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

        // Support: Firefox <=54
        // Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
        initial = initial / 2;

        // Trust units reported by jQuery.css
        unit = unit || initialInUnit[ 3 ];

        // Iteratively approximate from a nonzero starting point
        initialInUnit = +initial || 1;

        while ( maxIterations-- ) {

            // Evaluate and update our best guess (doubling guesses that zero out).
            // Finish if the scale equals or crosses 1 (making the old*new product non-positive).
            jQuery.style( elem, prop, initialInUnit + unit );
            if ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
                maxIterations = 0;
            }
            initialInUnit = initialInUnit / scale;

        }

        initialInUnit = initialInUnit * 2;
        jQuery.style( elem, prop, initialInUnit + unit );

        // Make sure we update the tween properties later on
        valueParts = valueParts || [];
    }

    if ( valueParts ) {
        initialInUnit = +initialInUnit || +initial || 0;

        // Apply relative offset (+=/-=) if specified
        adjusted = valueParts[ 1 ] ?
            initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
            +valueParts[ 2 ];
        if ( tween ) {
            tween.unit = unit;
            tween.start = initialInUnit;
            tween.end = adjusted;
        }
    }
    return adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
    var temp,
        doc = elem.ownerDocument,
        nodeName = elem.nodeName,
        display = defaultDisplayMap[ nodeName ];

    if ( display ) {
        return display;
    }

    temp = doc.body.appendChild( doc.createElement( nodeName ) );
    display = jQuery.css( temp, "display" );

    temp.parentNode.removeChild( temp );

    if ( display === "none" ) {
        display = "block";
    }
    defaultDisplayMap[ nodeName ] = display;

    return display;
}

function showHide( elements, show ) {
    var display, elem,
        values = [],
        index = 0,
        length = elements.length;

    // Determine new display value for elements that need to change
    for ( ; index < length; index++ ) {
        elem = elements[ index ];
        if ( !elem.style ) {
            continue;
        }

        display = elem.style.display;
        if ( show ) {

            // Since we force visibility upon cascade-hidden elements, an immediate (and slow)
            // check is required in this first loop unless we have a nonempty display value (either
            // inline or about-to-be-restored)
            if ( display === "none" ) {
                values[ index ] = dataPriv.get( elem, "display" ) || null;
                if ( !values[ index ] ) {
                    elem.style.display = "";
                }
            }
            if ( elem.style.display === "" && isHiddenWithinTree( elem ) ) {
                values[ index ] = getDefaultDisplay( elem );
            }
        } else {
            if ( display !== "none" ) {
                values[ index ] = "none";

                // Remember what we're overwriting
                dataPriv.set( elem, "display", display );
            }
        }
    }

    // Set the display of the elements in a second loop to avoid constant reflow
    for ( index = 0; index < length; index++ ) {
        if ( values[ index ] != null ) {
            elements[ index ].style.display = values[ index ];
        }
    }

    return elements;
}

jQuery.fn.extend( {
    show: function() {
        return showHide( this, true );
    },
    hide: function() {
        return showHide( this );
    },
    toggle: function( state ) {
        if ( typeof state === "boolean" ) {
            return state ? this.show() : this.hide();
        }

        return this.each( function() {
            if ( isHiddenWithinTree( this ) ) {
                jQuery( this ).show();
            } else {
                jQuery( this ).hide();
            }
        } );
    }
} );
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([a-z][^\/\0>\x20\t\r\n\f]*)/i );

var rscriptType = ( /^$|^module$|\/(?:java|ecma)script/i );



( function() {
    var fragment = document.createDocumentFragment(),
        div = fragment.appendChild( document.createElement( "div" ) ),
        input = document.createElement( "input" );

    // Support: Android 4.0 - 4.3 only
    // Check state lost if the name is set (#11217)
    // Support: Windows Web Apps (WWA)
    // `name` and `type` must use .setAttribute for WWA (#14901)
    input.setAttribute( "type", "radio" );
    input.setAttribute( "checked", "checked" );
    input.setAttribute( "name", "t" );

    div.appendChild( input );

    // Support: Android <=4.1 only
    // Older WebKit doesn't clone checked state correctly in fragments
    support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

    // Support: IE <=11 only
    // Make sure textarea (and checkbox) defaultValue is properly cloned
    div.innerHTML = "<textarea>x</textarea>";
    support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;

    // Support: IE <=9 only
    // IE <=9 replaces <option> tags with their contents when inserted outside of
    // the select element.
    div.innerHTML = "<option></option>";
    support.option = !!div.lastChild;
} )();


// We have to close these tags to support XHTML (#13200)
var wrapMap = {

    // XHTML parsers do not magically insert elements in the
    // same way that tag soup parsers do. So we cannot shorten
    // this by omitting <tbody> or other required elements.
    thead: [ 1, "<table>", "</table>" ],
    col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
    tr: [ 2, "<table><tbody>", "</tbody></table>" ],
    td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

    _default: [ 0, "", "" ]
};

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: IE <=9 only
if ( !support.option ) {
    wrapMap.optgroup = wrapMap.option = [ 1, "<select multiple='multiple'>", "</select>" ];
}


function getAll( context, tag ) {

    // Support: IE <=9 - 11 only
    // Use typeof to avoid zero-argument method invocation on host objects (#15151)
    var ret;

    if ( typeof context.getElementsByTagName !== "undefined" ) {
        ret = context.getElementsByTagName( tag || "*" );

    } else if ( typeof context.querySelectorAll !== "undefined" ) {
        ret = context.querySelectorAll( tag || "*" );

    } else {
        ret = [];
    }

    if ( tag === undefined || tag && nodeName( context, tag ) ) {
        return jQuery.merge( [ context ], ret );
    }

    return ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
    var i = 0,
        l = elems.length;

    for ( ; i < l; i++ ) {
        dataPriv.set(
            elems[ i ],
            "globalEval",
            !refElements || dataPriv.get( refElements[ i ], "globalEval" )
        );
    }
}


var rhtml = /<|&#?\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
    var elem, tmp, tag, wrap, attached, j,
        fragment = context.createDocumentFragment(),
        nodes = [],
        i = 0,
        l = elems.length;

    for ( ; i < l; i++ ) {
        elem = elems[ i ];

        if ( elem || elem === 0 ) {

            // Add nodes directly
            if ( toType( elem ) === "object" ) {

                // Support: Android <=4.0 only, PhantomJS 1 only
                // push.apply(_, arraylike) throws on ancient WebKit
                jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

            // Convert non-html into a text node
            } else if ( !rhtml.test( elem ) ) {
                nodes.push( context.createTextNode( elem ) );

            // Convert html into DOM nodes
            } else {
                tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

                // Deserialize a standard representation
                tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
                wrap = wrapMap[ tag ] || wrapMap._default;
                tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

                // Descend through wrappers to the right content
                j = wrap[ 0 ];
                while ( j-- ) {
                    tmp = tmp.lastChild;
                }

                // Support: Android <=4.0 only, PhantomJS 1 only
                // push.apply(_, arraylike) throws on ancient WebKit
                jQuery.merge( nodes, tmp.childNodes );

                // Remember the top-level container
                tmp = fragment.firstChild;

                // Ensure the created nodes are orphaned (#12392)
                tmp.textContent = "";
            }
        }
    }

    // Remove wrapper from fragment
    fragment.textContent = "";

    i = 0;
    while ( ( elem = nodes[ i++ ] ) ) {

        // Skip elements already in the context collection (trac-4087)
        if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
            if ( ignored ) {
                ignored.push( elem );
            }
            continue;
        }

        attached = isAttached( elem );

        // Append to fragment
        tmp = getAll( fragment.appendChild( elem ), "script" );

        // Preserve script evaluation history
        if ( attached ) {
            setGlobalEval( tmp );
        }

        // Capture executables
        if ( scripts ) {
            j = 0;
            while ( ( elem = tmp[ j++ ] ) ) {
                if ( rscriptType.test( elem.type || "" ) ) {
                    scripts.push( elem );
                }
            }
        }
    }

    return fragment;
}


var
    rkeyEvent = /^key/,
    rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
    rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
    return true;
}

function returnFalse() {
    return false;
}

// Support: IE <=9 - 11+
// focus() and blur() are asynchronous, except when they are no-op.
// So expect focus to be synchronous when the element is already active,
// and blur to be synchronous when the element is not already active.
// (focus and blur are always synchronous in other supported browsers,
// this just defines when we can count on it).
function expectSync( elem, type ) {
    return ( elem === safeActiveElement() ) === ( type === "focus" );
}

// Support: IE <=9 only
// Accessing document.activeElement can throw unexpectedly
// https://bugs.jquery.com/ticket/13393
function safeActiveElement() {
    try {
        return document.activeElement;
    } catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
    var origFn, type;

    // Types can be a map of types/handlers
    if ( typeof types === "object" ) {

        // ( types-Object, selector, data )
        if ( typeof selector !== "string" ) {

            // ( types-Object, data )
            data = data || selector;
            selector = undefined;
        }
        for ( type in types ) {
            on( elem, type, selector, data, types[ type ], one );
        }
        return elem;
    }

    if ( data == null && fn == null ) {

        // ( types, fn )
        fn = selector;
        data = selector = undefined;
    } else if ( fn == null ) {
        if ( typeof selector === "string" ) {

            // ( types, selector, fn )
            fn = data;
            data = undefined;
        } else {

            // ( types, data, fn )
            fn = data;
            data = selector;
            selector = undefined;
        }
    }
    if ( fn === false ) {
        fn = returnFalse;
    } else if ( !fn ) {
        return elem;
    }

    if ( one === 1 ) {
        origFn = fn;
        fn = function( event ) {

            // Can use an empty set, since event contains the info
            jQuery().off( event );
            return origFn.apply( this, arguments );
        };

        // Use same guid so caller can remove using origFn
        fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
    }
    return elem.each( function() {
        jQuery.event.add( this, types, fn, data, selector );
    } );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

    global: {},

    add: function( elem, types, handler, data, selector ) {

        var handleObjIn, eventHandle, tmp,
            events, t, handleObj,
            special, handlers, type, namespaces, origType,
            elemData = dataPriv.get( elem );

        // Only attach events to objects that accept data
        if ( !acceptData( elem ) ) {
            return;
        }

        // Caller can pass in an object of custom data in lieu of the handler
        if ( handler.handler ) {
            handleObjIn = handler;
            handler = handleObjIn.handler;
            selector = handleObjIn.selector;
        }

        // Ensure that invalid selectors throw exceptions at attach time
        // Evaluate against documentElement in case elem is a non-element node (e.g., document)
        if ( selector ) {
            jQuery.find.matchesSelector( documentElement, selector );
        }

        // Make sure that the handler has a unique ID, used to find/remove it later
        if ( !handler.guid ) {
            handler.guid = jQuery.guid++;
        }

        // Init the element's event structure and main handler, if this is the first
        if ( !( events = elemData.events ) ) {
            events = elemData.events = Object.create( null );
        }
        if ( !( eventHandle = elemData.handle ) ) {
            eventHandle = elemData.handle = function( e ) {

                // Discard the second event of a jQuery.event.trigger() and
                // when an event is called after a page has unloaded
                return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
                    jQuery.event.dispatch.apply( elem, arguments ) : undefined;
            };
        }

        // Handle multiple events separated by a space
        types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
        t = types.length;
        while ( t-- ) {
            tmp = rtypenamespace.exec( types[ t ] ) || [];
            type = origType = tmp[ 1 ];
            namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

            // There *must* be a type, no attaching namespace-only handlers
            if ( !type ) {
                continue;
            }

            // If event changes its type, use the special event handlers for the changed type
            special = jQuery.event.special[ type ] || {};

            // If selector defined, determine special event api type, otherwise given type
            type = ( selector ? special.delegateType : special.bindType ) || type;

            // Update special based on newly reset type
            special = jQuery.event.special[ type ] || {};

            // handleObj is passed to all event handlers
            handleObj = jQuery.extend( {
                type: type,
                origType: origType,
                data: data,
                handler: handler,
                guid: handler.guid,
                selector: selector,
                needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
                namespace: namespaces.join( "." )
            }, handleObjIn );

            // Init the event handler queue if we're the first
            if ( !( handlers = events[ type ] ) ) {
                handlers = events[ type ] = [];
                handlers.delegateCount = 0;

                // Only use addEventListener if the special events handler returns false
                if ( !special.setup ||
                    special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

                    if ( elem.addEventListener ) {
                        elem.addEventListener( type, eventHandle );
                    }
                }
            }

            if ( special.add ) {
                special.add.call( elem, handleObj );

                if ( !handleObj.handler.guid ) {
                    handleObj.handler.guid = handler.guid;
                }
            }

            // Add to the element's handler list, delegates in front
            if ( selector ) {
                handlers.splice( handlers.delegateCount++, 0, handleObj );
            } else {
                handlers.push( handleObj );
            }

            // Keep track of which events have ever been used, for event optimization
            jQuery.event.global[ type ] = true;
        }

    },

    // Detach an event or set of events from an element
    remove: function( elem, types, handler, selector, mappedTypes ) {

        var j, origCount, tmp,
            events, t, handleObj,
            special, handlers, type, namespaces, origType,
            elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

        if ( !elemData || !( events = elemData.events ) ) {
            return;
        }

        // Once for each type.namespace in types; type may be omitted
        types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
        t = types.length;
        while ( t-- ) {
            tmp = rtypenamespace.exec( types[ t ] ) || [];
            type = origType = tmp[ 1 ];
            namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

            // Unbind all events (on this namespace, if provided) for the element
            if ( !type ) {
                for ( type in events ) {
                    jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
                }
                continue;
            }

            special = jQuery.event.special[ type ] || {};
            type = ( selector ? special.delegateType : special.bindType ) || type;
            handlers = events[ type ] || [];
            tmp = tmp[ 2 ] &&
                new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

            // Remove matching events
            origCount = j = handlers.length;
            while ( j-- ) {
                handleObj = handlers[ j ];

                if ( ( mappedTypes || origType === handleObj.origType ) &&
                    ( !handler || handler.guid === handleObj.guid ) &&
                    ( !tmp || tmp.test( handleObj.namespace ) ) &&
                    ( !selector || selector === handleObj.selector ||
                        selector === "**" && handleObj.selector ) ) {
                    handlers.splice( j, 1 );

                    if ( handleObj.selector ) {
                        handlers.delegateCount--;
                    }
                    if ( special.remove ) {
                        special.remove.call( elem, handleObj );
                    }
                }
            }

            // Remove generic event handler if we removed something and no more handlers exist
            // (avoids potential for endless recursion during removal of special event handlers)
            if ( origCount && !handlers.length ) {
                if ( !special.teardown ||
                    special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

                    jQuery.removeEvent( elem, type, elemData.handle );
                }

                delete events[ type ];
            }
        }

        // Remove data and the expando if it's no longer used
        if ( jQuery.isEmptyObject( events ) ) {
            dataPriv.remove( elem, "handle events" );
        }
    },

    dispatch: function( nativeEvent ) {

        var i, j, ret, matched, handleObj, handlerQueue,
            args = new Array( arguments.length ),

            // Make a writable jQuery.Event from the native event object
            event = jQuery.event.fix( nativeEvent ),

            handlers = (
                    dataPriv.get( this, "events" ) || Object.create( null )
                )[ event.type ] || [],
            special = jQuery.event.special[ event.type ] || {};

        // Use the fix-ed jQuery.Event rather than the (read-only) native event
        args[ 0 ] = event;

        for ( i = 1; i < arguments.length; i++ ) {
            args[ i ] = arguments[ i ];
        }

        event.delegateTarget = this;

        // Call the preDispatch hook for the mapped type, and let it bail if desired
        if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
            return;
        }

        // Determine handlers
        handlerQueue = jQuery.event.handlers.call( this, event, handlers );

        // Run delegates first; they may want to stop propagation beneath us
        i = 0;
        while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
            event.currentTarget = matched.elem;

            j = 0;
            while ( ( handleObj = matched.handlers[ j++ ] ) &&
                !event.isImmediatePropagationStopped() ) {

                // If the event is namespaced, then each handler is only invoked if it is
                // specially universal or its namespaces are a superset of the event's.
                if ( !event.rnamespace || handleObj.namespace === false ||
                    event.rnamespace.test( handleObj.namespace ) ) {

                    event.handleObj = handleObj;
                    event.data = handleObj.data;

                    ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
                        handleObj.handler ).apply( matched.elem, args );

                    if ( ret !== undefined ) {
                        if ( ( event.result = ret ) === false ) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                    }
                }
            }
        }

        // Call the postDispatch hook for the mapped type
        if ( special.postDispatch ) {
            special.postDispatch.call( this, event );
        }

        return event.result;
    },

    handlers: function( event, handlers ) {
        var i, handleObj, sel, matchedHandlers, matchedSelectors,
            handlerQueue = [],
            delegateCount = handlers.delegateCount,
            cur = event.target;

        // Find delegate handlers
        if ( delegateCount &&

            // Support: IE <=9
            // Black-hole SVG <use> instance trees (trac-13180)
            cur.nodeType &&

            // Support: Firefox <=42
            // Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
            // https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
            // Support: IE 11 only
            // ...but not arrow key "clicks" of radio inputs, which can have `button` -1 (gh-2343)
            !( event.type === "click" && event.button >= 1 ) ) {

            for ( ; cur !== this; cur = cur.parentNode || this ) {

                // Don't check non-elements (#13208)
                // Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
                if ( cur.nodeType === 1 && !( event.type === "click" && cur.disabled === true ) ) {
                    matchedHandlers = [];
                    matchedSelectors = {};
                    for ( i = 0; i < delegateCount; i++ ) {
                        handleObj = handlers[ i ];

                        // Don't conflict with Object.prototype properties (#13203)
                        sel = handleObj.selector + " ";

                        if ( matchedSelectors[ sel ] === undefined ) {
                            matchedSelectors[ sel ] = handleObj.needsContext ?
                                jQuery( sel, this ).index( cur ) > -1 :
                                jQuery.find( sel, this, null, [ cur ] ).length;
                        }
                        if ( matchedSelectors[ sel ] ) {
                            matchedHandlers.push( handleObj );
                        }
                    }
                    if ( matchedHandlers.length ) {
                        handlerQueue.push( { elem: cur, handlers: matchedHandlers } );
                    }
                }
            }
        }

        // Add the remaining (directly-bound) handlers
        cur = this;
        if ( delegateCount < handlers.length ) {
            handlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
        }

        return handlerQueue;
    },

    addProp: function( name, hook ) {
        Object.defineProperty( jQuery.Event.prototype, name, {
            enumerable: true,
            configurable: true,

            get: isFunction( hook ) ?
                function() {
                    if ( this.originalEvent ) {
                            return hook( this.originalEvent );
                    }
                } :
                function() {
                    if ( this.originalEvent ) {
                            return this.originalEvent[ name ];
                    }
                },

            set: function( value ) {
                Object.defineProperty( this, name, {
                    enumerable: true,
                    configurable: true,
                    writable: true,
                    value: value
                } );
            }
        } );
    },

    fix: function( originalEvent ) {
        return originalEvent[ jQuery.expando ] ?
            originalEvent :
            new jQuery.Event( originalEvent );
    },

    special: {
        load: {

            // Prevent triggered image.load events from bubbling to window.load
            noBubble: true
        },
        click: {

            // Utilize native event to ensure correct state for checkable inputs
            setup: function( data ) {

                // For mutual compressibility with _default, replace `this` access with a local var.
                // `|| data` is dead code meant only to preserve the variable through minification.
                var el = this || data;

                // Claim the first handler
                if ( rcheckableType.test( el.type ) &&
                    el.click && nodeName( el, "input" ) ) {

                    // dataPriv.set( el, "click", ... )
                    leverageNative( el, "click", returnTrue );
                }

                // Return false to allow normal processing in the caller
                return false;
            },
            trigger: function( data ) {

                // For mutual compressibility with _default, replace `this` access with a local var.
                // `|| data` is dead code meant only to preserve the variable through minification.
                var el = this || data;

                // Force setup before triggering a click
                if ( rcheckableType.test( el.type ) &&
                    el.click && nodeName( el, "input" ) ) {

                    leverageNative( el, "click" );
                }

                // Return non-false to allow normal event-path propagation
                return true;
            },

            // For cross-browser consistency, suppress native .click() on links
            // Also prevent it if we're currently inside a leveraged native-event stack
            _default: function( event ) {
                var target = event.target;
                return rcheckableType.test( target.type ) &&
                    target.click && nodeName( target, "input" ) &&
                    dataPriv.get( target, "click" ) ||
                    nodeName( target, "a" );
            }
        },

        beforeunload: {
            postDispatch: function( event ) {

                // Support: Firefox 20+
                // Firefox doesn't alert if the returnValue field is not set.
                if ( event.result !== undefined && event.originalEvent ) {
                    event.originalEvent.returnValue = event.result;
                }
            }
        }
    }
};

// Ensure the presence of an event listener that handles manually-triggered
// synthetic events by interrupting progress until reinvoked in response to
// *native* events that it fires directly, ensuring that state changes have
// already occurred before other listeners are invoked.
function leverageNative( el, type, expectSync ) {

    // Missing expectSync indicates a trigger call, which must force setup through jQuery.event.add
    if ( !expectSync ) {
        if ( dataPriv.get( el, type ) === undefined ) {
            jQuery.event.add( el, type, returnTrue );
        }
        return;
    }

    // Register the controller as a special universal handler for all event namespaces
    dataPriv.set( el, type, false );
    jQuery.event.add( el, type, {
        namespace: false,
        handler: function( event ) {
            var notAsync, result,
                saved = dataPriv.get( this, type );

            if ( ( event.isTrigger & 1 ) && this[ type ] ) {

                // Interrupt processing of the outer synthetic .trigger()ed event
                // Saved data should be false in such cases, but might be a leftover capture object
                // from an async native handler (gh-4350)
                if ( !saved.length ) {

                    // Store arguments for use when handling the inner native event
                    // There will always be at least one argument (an event object), so this array
                    // will not be confused with a leftover capture object.
                    saved = slice.call( arguments );
                    dataPriv.set( this, type, saved );

                    // Trigger the native event and capture its result
                    // Support: IE <=9 - 11+
                    // focus() and blur() are asynchronous
                    notAsync = expectSync( this, type );
                    this[ type ]();
                    result = dataPriv.get( this, type );
                    if ( saved !== result || notAsync ) {
                        dataPriv.set( this, type, false );
                    } else {
                        result = {};
                    }
                    if ( saved !== result ) {

                        // Cancel the outer synthetic event
                        event.stopImmediatePropagation();
                        event.preventDefault();
                        return result.value;
                    }

                // If this is an inner synthetic event for an event with a bubbling surrogate
                // (focus or blur), assume that the surrogate already propagated from triggering the
                // native event and prevent that from happening again here.
                // This technically gets the ordering wrong w.r.t. to `.trigger()` (in which the
                // bubbling surrogate propagates *after* the non-bubbling base), but that seems
                // less bad than duplication.
                } else if ( ( jQuery.event.special[ type ] || {} ).delegateType ) {
                    event.stopPropagation();
                }

            // If this is a native event triggered above, everything is now in order
            // Fire an inner synthetic event with the original arguments
            } else if ( saved.length ) {

                // ...and capture the result
                dataPriv.set( this, type, {
                    value: jQuery.event.trigger(

                        // Support: IE <=9 - 11+
                        // Extend with the prototype to reset the above stopImmediatePropagation()
                        jQuery.extend( saved[ 0 ], jQuery.Event.prototype ),
                        saved.slice( 1 ),
                        this
                    )
                } );

                // Abort handling of the native event
                event.stopImmediatePropagation();
            }
        }
    } );
}

jQuery.removeEvent = function( elem, type, handle ) {

    // This "if" is needed for plain objects
    if ( elem.removeEventListener ) {
        elem.removeEventListener( type, handle );
    }
};

jQuery.Event = function( src, props ) {

    // Allow instantiation without the 'new' keyword
    if ( !( this instanceof jQuery.Event ) ) {
        return new jQuery.Event( src, props );
    }

    // Event object
    if ( src && src.type ) {
        this.originalEvent = src;
        this.type = src.type;

        // Events bubbling up the document may have been marked as prevented
        // by a handler lower down the tree; reflect the correct value.
        this.isDefaultPrevented = src.defaultPrevented ||
                src.defaultPrevented === undefined &&

                // Support: Android <=2.3 only
                src.returnValue === false ?
            returnTrue :
            returnFalse;

        // Create target properties
        // Support: Safari <=6 - 7 only
        // Target should not be a text node (#504, #13143)
        this.target = ( src.target && src.target.nodeType === 3 ) ?
            src.target.parentNode :
            src.target;

        this.currentTarget = src.currentTarget;
        this.relatedTarget = src.relatedTarget;

    // Event type
    } else {
        this.type = src;
    }

    // Put explicitly provided properties onto the event object
    if ( props ) {
        jQuery.extend( this, props );
    }

    // Create a timestamp if incoming event doesn't have one
    this.timeStamp = src && src.timeStamp || Date.now();

    // Mark it as fixed
    this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
    constructor: jQuery.Event,
    isDefaultPrevented: returnFalse,
    isPropagationStopped: returnFalse,
    isImmediatePropagationStopped: returnFalse,
    isSimulated: false,

    preventDefault: function() {
        var e = this.originalEvent;

        this.isDefaultPrevented = returnTrue;

        if ( e && !this.isSimulated ) {
            e.preventDefault();
        }
    },
    stopPropagation: function() {
        var e = this.originalEvent;

        this.isPropagationStopped = returnTrue;

        if ( e && !this.isSimulated ) {
            e.stopPropagation();
        }
    },
    stopImmediatePropagation: function() {
        var e = this.originalEvent;

        this.isImmediatePropagationStopped = returnTrue;

        if ( e && !this.isSimulated ) {
            e.stopImmediatePropagation();
        }

        this.stopPropagation();
    }
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
    altKey: true,
    bubbles: true,
    cancelable: true,
    changedTouches: true,
    ctrlKey: true,
    detail: true,
    eventPhase: true,
    metaKey: true,
    pageX: true,
    pageY: true,
    shiftKey: true,
    view: true,
    "char": true,
    code: true,
    charCode: true,
    key: true,
    keyCode: true,
    button: true,
    buttons: true,
    clientX: true,
    clientY: true,
    offsetX: true,
    offsetY: true,
    pointerId: true,
    pointerType: true,
    screenX: true,
    screenY: true,
    targetTouches: true,
    toElement: true,
    touches: true,

    which: function( event ) {
        var button = event.button;

        // Add which for key events
        if ( event.which == null && rkeyEvent.test( event.type ) ) {
            return event.charCode != null ? event.charCode : event.keyCode;
        }

        // Add which for click: 1 === left; 2 === middle; 3 === right
        if ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
            if ( button & 1 ) {
                return 1;
            }

            if ( button & 2 ) {
                return 3;
            }

            if ( button & 4 ) {
                return 2;
            }

            return 0;
        }

        return event.which;
    }
}, jQuery.event.addProp );

jQuery.each( { focus: "focusin", blur: "focusout" }, function( type, delegateType ) {
    jQuery.event.special[ type ] = {

        // Utilize native event if possible so blur/focus sequence is correct
        setup: function() {

            // Claim the first handler
            // dataPriv.set( this, "focus", ... )
            // dataPriv.set( this, "blur", ... )
            leverageNative( this, type, expectSync );

            // Return false to allow normal processing in the caller
            return false;
        },
        trigger: function() {

            // Force setup before trigger
            leverageNative( this, type );

            // Return non-false to allow normal event-path propagation
            return true;
        },

        delegateType: delegateType
    };
} );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
    mouseenter: "mouseover",
    mouseleave: "mouseout",
    pointerenter: "pointerover",
    pointerleave: "pointerout"
}, function( orig, fix ) {
    jQuery.event.special[ orig ] = {
        delegateType: fix,
        bindType: fix,

        handle: function( event ) {
            var ret,
                target = this,
                related = event.relatedTarget,
                handleObj = event.handleObj;

            // For mouseenter/leave call the handler if related is outside the target.
            // NB: No relatedTarget if the mouse left/entered the browser window
            if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
                event.type = handleObj.origType;
                ret = handleObj.handler.apply( this, arguments );
                event.type = fix;
            }
            return ret;
        }
    };
} );

jQuery.fn.extend( {

    on: function( types, selector, data, fn ) {
        return on( this, types, selector, data, fn );
    },
    one: function( types, selector, data, fn ) {
        return on( this, types, selector, data, fn, 1 );
    },
    off: function( types, selector, fn ) {
        var handleObj, type;
        if ( types && types.preventDefault && types.handleObj ) {

            // ( event )  dispatched jQuery.Event
            handleObj = types.handleObj;
            jQuery( types.delegateTarget ).off(
                handleObj.namespace ?
                    handleObj.origType + "." + handleObj.namespace :
                    handleObj.origType,
                handleObj.selector,
                handleObj.handler
            );
            return this;
        }
        if ( typeof types === "object" ) {

            // ( types-object [, selector] )
            for ( type in types ) {
                this.off( type, selector, types[ type ] );
            }
            return this;
        }
        if ( selector === false || typeof selector === "function" ) {

            // ( types [, fn] )
            fn = selector;
            selector = undefined;
        }
        if ( fn === false ) {
            fn = returnFalse;
        }
        return this.each( function() {
            jQuery.event.remove( this, types, fn, selector );
        } );
    }
} );


var

    // Support: IE <=10 - 11, Edge 12 - 13 only
    // In IE/Edge using regex groups here causes severe slowdowns.
    // See https://connect.microsoft.com/IE/feedback/details/1736512/
    rnoInnerhtml = /<script|<style|<link/i,

    // checked="checked" or checked
    rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
    rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
    if ( nodeName( elem, "table" ) &&
        nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ) {

        return jQuery( elem ).children( "tbody" )[ 0 ] || elem;
    }

    return elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
    elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
    return elem;
}
function restoreScript( elem ) {
    if ( ( elem.type || "" ).slice( 0, 5 ) === "true/" ) {
        elem.type = elem.type.slice( 5 );
    } else {
        elem.removeAttribute( "type" );
    }

    return elem;
}

function cloneCopyEvent( src, dest ) {
    var i, l, type, pdataOld, udataOld, udataCur, events;

    if ( dest.nodeType !== 1 ) {
        return;
    }

    // 1. Copy private data: events, handlers, etc.
    if ( dataPriv.hasData( src ) ) {
        pdataOld = dataPriv.get( src );
        events = pdataOld.events;

        if ( events ) {
            dataPriv.remove( dest, "handle events" );

            for ( type in events ) {
                for ( i = 0, l = events[ type ].length; i < l; i++ ) {
                    jQuery.event.add( dest, type, events[ type ][ i ] );
                }
            }
        }
    }

    // 2. Copy user data
    if ( dataUser.hasData( src ) ) {
        udataOld = dataUser.access( src );
        udataCur = jQuery.extend( {}, udataOld );

        dataUser.set( dest, udataCur );
    }
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
    var nodeName = dest.nodeName.toLowerCase();

    // Fails to persist the checked state of a cloned checkbox or radio button.
    if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
        dest.checked = src.checked;

    // Fails to return the selected option to the default selected state when cloning options
    } else if ( nodeName === "input" || nodeName === "textarea" ) {
        dest.defaultValue = src.defaultValue;
    }
}

function domManip( collection, args, callback, ignored ) {

    // Flatten any nested arrays
    args = flat( args );

    var fragment, first, scripts, hasScripts, node, doc,
        i = 0,
        l = collection.length,
        iNoClone = l - 1,
        value = args[ 0 ],
        valueIsFunction = isFunction( value );

    // We can't cloneNode fragments that contain checked, in WebKit
    if ( valueIsFunction ||
            ( l > 1 && typeof value === "string" &&
                !support.checkClone && rchecked.test( value ) ) ) {
        return collection.each( function( index ) {
            var self = collection.eq( index );
            if ( valueIsFunction ) {
                args[ 0 ] = value.call( this, index, self.html() );
            }
            domManip( self, args, callback, ignored );
        } );
    }

    if ( l ) {
        fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
        first = fragment.firstChild;

        if ( fragment.childNodes.length === 1 ) {
            fragment = first;
        }

        // Require either new content or an interest in ignored elements to invoke the callback
        if ( first || ignored ) {
            scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
            hasScripts = scripts.length;

            // Use the original fragment for the last item
            // instead of the first because it can end up
            // being emptied incorrectly in certain situations (#8070).
            for ( ; i < l; i++ ) {
                node = fragment;

                if ( i !== iNoClone ) {
                    node = jQuery.clone( node, true, true );

                    // Keep references to cloned scripts for later restoration
                    if ( hasScripts ) {

                        // Support: Android <=4.0 only, PhantomJS 1 only
                        // push.apply(_, arraylike) throws on ancient WebKit
                        jQuery.merge( scripts, getAll( node, "script" ) );
                    }
                }

                callback.call( collection[ i ], node, i );
            }

            if ( hasScripts ) {
                doc = scripts[ scripts.length - 1 ].ownerDocument;

                // Reenable scripts
                jQuery.map( scripts, restoreScript );

                // Evaluate executable scripts on first document insertion
                for ( i = 0; i < hasScripts; i++ ) {
                    node = scripts[ i ];
                    if ( rscriptType.test( node.type || "" ) &&
                        !dataPriv.access( node, "globalEval" ) &&
                        jQuery.contains( doc, node ) ) {

                        if ( node.src && ( node.type || "" ).toLowerCase()  !== "module" ) {

                            // Optional AJAX dependency, but won't run scripts if not present
                            if ( jQuery._evalUrl && !node.noModule ) {
                                jQuery._evalUrl( node.src, {
                                    nonce: node.nonce || node.getAttribute( "nonce" )
                                }, doc );
                            }
                        } else {
                            DOMEval( node.textContent.replace( rcleanScript, "" ), node, doc );
                        }
                    }
                }
            }
        }
    }

    return collection;
}

function remove( elem, selector, keepData ) {
    var node,
        nodes = selector ? jQuery.filter( selector, elem ) : elem,
        i = 0;

    for ( ; ( node = nodes[ i ] ) != null; i++ ) {
        if ( !keepData && node.nodeType === 1 ) {
            jQuery.cleanData( getAll( node ) );
        }

        if ( node.parentNode ) {
            if ( keepData && isAttached( node ) ) {
                setGlobalEval( getAll( node, "script" ) );
            }
            node.parentNode.removeChild( node );
        }
    }

    return elem;
}

jQuery.extend( {
    htmlPrefilter: function( html ) {
        return html;
    },

    clone: function( elem, dataAndEvents, deepDataAndEvents ) {
        var i, l, srcElements, destElements,
            clone = elem.cloneNode( true ),
            inPage = isAttached( elem );

        // Fix IE cloning issues
        if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
                !jQuery.isXMLDoc( elem ) ) {

            // We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
            destElements = getAll( clone );
            srcElements = getAll( elem );

            for ( i = 0, l = srcElements.length; i < l; i++ ) {
                fixInput( srcElements[ i ], destElements[ i ] );
            }
        }

        // Copy the events from the original to the clone
        if ( dataAndEvents ) {
            if ( deepDataAndEvents ) {
                srcElements = srcElements || getAll( elem );
                destElements = destElements || getAll( clone );

                for ( i = 0, l = srcElements.length; i < l; i++ ) {
                    cloneCopyEvent( srcElements[ i ], destElements[ i ] );
                }
            } else {
                cloneCopyEvent( elem, clone );
            }
        }

        // Preserve script evaluation history
        destElements = getAll( clone, "script" );
        if ( destElements.length > 0 ) {
            setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
        }

        // Return the cloned set
        return clone;
    },

    cleanData: function( elems ) {
        var data, elem, type,
            special = jQuery.event.special,
            i = 0;

        for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
            if ( acceptData( elem ) ) {
                if ( ( data = elem[ dataPriv.expando ] ) ) {
                    if ( data.events ) {
                        for ( type in data.events ) {
                            if ( special[ type ] ) {
                                jQuery.event.remove( elem, type );

                            // This is a shortcut to avoid jQuery.event.remove's overhead
                            } else {
                                jQuery.removeEvent( elem, type, data.handle );
                            }
                        }
                    }

                    // Support: Chrome <=35 - 45+
                    // Assign undefined instead of using delete, see Data#remove
                    elem[ dataPriv.expando ] = undefined;
                }
                if ( elem[ dataUser.expando ] ) {

                    // Support: Chrome <=35 - 45+
                    // Assign undefined instead of using delete, see Data#remove
                    elem[ dataUser.expando ] = undefined;
                }
            }
        }
    }
} );

jQuery.fn.extend( {
    detach: function( selector ) {
        return remove( this, selector, true );
    },

    remove: function( selector ) {
        return remove( this, selector );
    },

    text: function( value ) {
        return access( this, function( value ) {
            return value === undefined ?
                jQuery.text( this ) :
                this.empty().each( function() {
                    if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
                        this.textContent = value;
                    }
                } );
        }, null, value, arguments.length );
    },

    append: function() {
        return domManip( this, arguments, function( elem ) {
            if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
                var target = manipulationTarget( this, elem );
                target.appendChild( elem );
            }
        } );
    },

    prepend: function() {
        return domManip( this, arguments, function( elem ) {
            if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
                var target = manipulationTarget( this, elem );
                target.insertBefore( elem, target.firstChild );
            }
        } );
    },

    before: function() {
        return domManip( this, arguments, function( elem ) {
            if ( this.parentNode ) {
                this.parentNode.insertBefore( elem, this );
            }
        } );
    },

    after: function() {
        return domManip( this, arguments, function( elem ) {
            if ( this.parentNode ) {
                this.parentNode.insertBefore( elem, this.nextSibling );
            }
        } );
    },

    empty: function() {
        var elem,
            i = 0;

        for ( ; ( elem = this[ i ] ) != null; i++ ) {
            if ( elem.nodeType === 1 ) {

                // Prevent memory leaks
                jQuery.cleanData( getAll( elem, false ) );

                // Remove any remaining nodes
                elem.textContent = "";
            }
        }

        return this;
    },

    clone: function( dataAndEvents, deepDataAndEvents ) {
        dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
        deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

        return this.map( function() {
            return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
        } );
    },

    html: function( value ) {
        return access( this, function( value ) {
            var elem = this[ 0 ] || {},
                i = 0,
                l = this.length;

            if ( value === undefined && elem.nodeType === 1 ) {
                return elem.innerHTML;
            }

            // See if we can take a shortcut and just use innerHTML
            if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
                !wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

                value = jQuery.htmlPrefilter( value );

                try {
                    for ( ; i < l; i++ ) {
                        elem = this[ i ] || {};

                        // Remove element nodes and prevent memory leaks
                        if ( elem.nodeType === 1 ) {
                            jQuery.cleanData( getAll( elem, false ) );
                            elem.innerHTML = value;
                        }
                    }

                    elem = 0;

                // If using innerHTML throws an exception, use the fallback method
                } catch ( e ) {}
            }

            if ( elem ) {
                this.empty().append( value );
            }
        }, null, value, arguments.length );
    },

    replaceWith: function() {
        var ignored = [];

        // Make the changes, replacing each non-ignored context element with the new content
        return domManip( this, arguments, function( elem ) {
            var parent = this.parentNode;

            if ( jQuery.inArray( this, ignored ) < 0 ) {
                jQuery.cleanData( getAll( this ) );
                if ( parent ) {
                    parent.replaceChild( elem, this );
                }
            }

        // Force callback invocation
        }, ignored );
    }
} );

jQuery.each( {
    appendTo: "append",
    prependTo: "prepend",
    insertBefore: "before",
    insertAfter: "after",
    replaceAll: "replaceWith"
}, function( name, original ) {
    jQuery.fn[ name ] = function( selector ) {
        var elems,
            ret = [],
            insert = jQuery( selector ),
            last = insert.length - 1,
            i = 0;

        for ( ; i <= last; i++ ) {
            elems = i === last ? this : this.clone( true );
            jQuery( insert[ i ] )[ original ]( elems );

            // Support: Android <=4.0 only, PhantomJS 1 only
            // .get() because push.apply(_, arraylike) throws on ancient WebKit
            push.apply( ret, elems.get() );
        }

        return this.pushStack( ret );
    };
} );
var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var getStyles = function( elem ) {

        // Support: IE <=11 only, Firefox <=30 (#15098, #14150)
        // IE throws on elements created in popups
        // FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
        var view = elem.ownerDocument.defaultView;

        if ( !view || !view.opener ) {
            view = window;
        }

        return view.getComputedStyle( elem );
    };

var swap = function( elem, options, callback ) {
    var ret, name,
        old = {};

    // Remember the old values, and insert the new ones
    for ( name in options ) {
        old[ name ] = elem.style[ name ];
        elem.style[ name ] = options[ name ];
    }

    ret = callback.call( elem );

    // Revert the old values
    for ( name in options ) {
        elem.style[ name ] = old[ name ];
    }

    return ret;
};


var rboxStyle = new RegExp( cssExpand.join( "|" ), "i" );



( function() {

    // Executing both pixelPosition & boxSizingReliable tests require only one layout
    // so they're executed at the same time to save the second computation.
    function computeStyleTests() {

        // This is a singleton, we need to execute it only once
        if ( !div ) {
            return;
        }

        container.style.cssText = "position:absolute;left:-11111px;width:60px;" +
            "margin-top:1px;padding:0;border:0";
        div.style.cssText =
            "position:relative;display:block;box-sizing:border-box;overflow:scroll;" +
            "margin:auto;border:1px;padding:1px;" +
            "width:60%;top:1%";
        documentElement.appendChild( container ).appendChild( div );

        var divStyle = window.getComputedStyle( div );
        pixelPositionVal = divStyle.top !== "1%";

        // Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
        reliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

        // Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
        // Some styles come back with percentage values, even though they shouldn't
        div.style.right = "60%";
        pixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

        // Support: IE 9 - 11 only
        // Detect misreporting of content dimensions for box-sizing:border-box elements
        boxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

        // Support: IE 9 only
        // Detect overflow:scroll screwiness (gh-3699)
        // Support: Chrome <=64
        // Don't get tricked when zoom affects offsetWidth (gh-4029)
        div.style.position = "absolute";
        scrollboxSizeVal = roundPixelMeasures( div.offsetWidth / 3 ) === 12;

        documentElement.removeChild( container );

        // Nullify the div so it wouldn't be stored in the memory and
        // it will also be a sign that checks already performed
        div = null;
    }

    function roundPixelMeasures( measure ) {
        return Math.round( parseFloat( measure ) );
    }

    var pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
        reliableTrDimensionsVal, reliableMarginLeftVal,
        container = document.createElement( "div" ),
        div = document.createElement( "div" );

    // Finish early in limited (non-browser) environments
    if ( !div.style ) {
        return;
    }

    // Support: IE <=9 - 11 only
    // Style of cloned element affects source element cloned (#8908)
    div.style.backgroundClip = "content-box";
    div.cloneNode( true ).style.backgroundClip = "";
    support.clearCloneStyle = div.style.backgroundClip === "content-box";

    jQuery.extend( support, {
        boxSizingReliable: function() {
            computeStyleTests();
            return boxSizingReliableVal;
        },
        pixelBoxStyles: function() {
            computeStyleTests();
            return pixelBoxStylesVal;
        },
        pixelPosition: function() {
            computeStyleTests();
            return pixelPositionVal;
        },
        reliableMarginLeft: function() {
            computeStyleTests();
            return reliableMarginLeftVal;
        },
        scrollboxSize: function() {
            computeStyleTests();
            return scrollboxSizeVal;
        },

        // Support: IE 9 - 11+, Edge 15 - 18+
        // IE/Edge misreport `getComputedStyle` of table rows with width/height
        // set in CSS while `offset*` properties report correct values.
        // Behavior in IE 9 is more subtle than in newer versions & it passes
        // some versions of this test; make sure not to make it pass there!
        reliableTrDimensions: function() {
            var table, tr, trChild, trStyle;
            if ( reliableTrDimensionsVal == null ) {
                table = document.createElement( "table" );
                tr = document.createElement( "tr" );
                trChild = document.createElement( "div" );

                table.style.cssText = "position:absolute;left:-11111px";
                tr.style.height = "1px";
                trChild.style.height = "9px";

                documentElement
                    .appendChild( table )
                    .appendChild( tr )
                    .appendChild( trChild );

                trStyle = window.getComputedStyle( tr );
                reliableTrDimensionsVal = parseInt( trStyle.height ) > 3;

                documentElement.removeChild( table );
            }
            return reliableTrDimensionsVal;
        }
    } );
} )();


function curCSS( elem, name, computed ) {
    var width, minWidth, maxWidth, ret,

        // Support: Firefox 51+
        // Retrieving style before computed somehow
        // fixes an issue with getting wrong values
        // on detached elements
        style = elem.style;

    computed = computed || getStyles( elem );

    // getPropertyValue is needed for:
    //   .css('filter') (IE 9 only, #12537)
    //   .css('--customProperty) (#3144)
    if ( computed ) {
        ret = computed.getPropertyValue( name ) || computed[ name ];

        if ( ret === "" && !isAttached( elem ) ) {
            ret = jQuery.style( elem, name );
        }

        // A tribute to the "awesome hack by Dean Edwards"
        // Android Browser returns percentage for some values,
        // but width seems to be reliably pixels.
        // This is against the CSSOM draft spec:
        // https://drafts.csswg.org/cssom/#resolved-values
        if ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

            // Remember the original values
            width = style.width;
            minWidth = style.minWidth;
            maxWidth = style.maxWidth;

            // Put in the new values to get a computed value out
            style.minWidth = style.maxWidth = style.width = ret;
            ret = computed.width;

            // Revert the changed values
            style.width = width;
            style.minWidth = minWidth;
            style.maxWidth = maxWidth;
        }
    }

    return ret !== undefined ?

        // Support: IE <=9 - 11 only
        // IE returns zIndex value as an integer.
        ret + "" :
        ret;
}


function addGetHookIf( conditionFn, hookFn ) {

    // Define the hook, we'll check on the first run if it's really needed.
    return {
        get: function() {
            if ( conditionFn() ) {

                // Hook not needed (or it's not possible to use it due
                // to missing dependency), remove it.
                delete this.get;
                return;
            }

            // Hook needed; redefine it so that the support test is not executed again.
            return ( this.get = hookFn ).apply( this, arguments );
        }
    };
}


var cssPrefixes = [ "Webkit", "Moz", "ms" ],
    emptyStyle = document.createElement( "div" ).style,
    vendorProps = {};

// Return a vendor-prefixed property or undefined
function vendorPropName( name ) {

    // Check for vendor prefixed names
    var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
        i = cssPrefixes.length;

    while ( i-- ) {
        name = cssPrefixes[ i ] + capName;
        if ( name in emptyStyle ) {
            return name;
        }
    }
}

// Return a potentially-mapped jQuery.cssProps or vendor prefixed property
function finalPropName( name ) {
    var final = jQuery.cssProps[ name ] || vendorProps[ name ];

    if ( final ) {
        return final;
    }
    if ( name in emptyStyle ) {
        return name;
    }
    return vendorProps[ name ] = vendorPropName( name ) || name;
}


var

    // Swappable if display is none or starts with table
    // except "table", "table-cell", or "table-caption"
    // See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
    rdisplayswap = /^(none|table(?!-c[ea]).+)/,
    rcustomProp = /^--/,
    cssShow = { position: "absolute", visibility: "hidden", display: "block" },
    cssNormalTransform = {
        letterSpacing: "0",
        fontWeight: "400"
    };

function setPositiveNumber( _elem, value, subtract ) {

    // Any relative (+/-) values have already been
    // normalized at this point
    var matches = rcssNum.exec( value );
    return matches ?

        // Guard against undefined "subtract", e.g., when used as in cssHooks
        Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
        value;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
    var i = dimension === "width" ? 1 : 0,
        extra = 0,
        delta = 0;

    // Adjustment may not be necessary
    if ( box === ( isBorderBox ? "border" : "content" ) ) {
        return 0;
    }

    for ( ; i < 4; i += 2 ) {

        // Both box models exclude margin
        if ( box === "margin" ) {
            delta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
        }

        // If we get here with a content-box, we're seeking "padding" or "border" or "margin"
        if ( !isBorderBox ) {

            // Add padding
            delta += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

            // For "border" or "margin", add border
            if ( box !== "padding" ) {
                delta += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );

            // But still keep track of it otherwise
            } else {
                extra += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
            }

        // If we get here with a border-box (content + padding + border), we're seeking "content" or
        // "padding" or "margin"
        } else {

            // For "content", subtract padding
            if ( box === "content" ) {
                delta -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
            }

            // For "content" or "padding", subtract border
            if ( box !== "margin" ) {
                delta -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
            }
        }
    }

    // Account for positive content-box scroll gutter when requested by providing computedVal
    if ( !isBorderBox && computedVal >= 0 ) {

        // offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
        // Assuming integer scroll gutter, subtract the rest and round down
        delta += Math.max( 0, Math.ceil(
            elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
            computedVal -
            delta -
            extra -
            0.5

        // If offsetWidth/offsetHeight is unknown, then we can't determine content-box scroll gutter
        // Use an explicit zero to avoid NaN (gh-3964)
        ) ) || 0;
    }

    return delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

    // Start with computed style
    var styles = getStyles( elem ),

        // To avoid forcing a reflow, only fetch boxSizing if we need it (gh-4322).
        // Fake content-box until we know it's needed to know the true value.
        boxSizingNeeded = !support.boxSizingReliable() || extra,
        isBorderBox = boxSizingNeeded &&
            jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
        valueIsBorderBox = isBorderBox,

        val = curCSS( elem, dimension, styles ),
        offsetProp = "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 );

    // Support: Firefox <=54
    // Return a confounding non-pixel value or feign ignorance, as appropriate.
    if ( rnumnonpx.test( val ) ) {
        if ( !extra ) {
            return val;
        }
        val = "auto";
    }


    // Support: IE 9 - 11 only
    // Use offsetWidth/offsetHeight for when box sizing is unreliable.
    // In those cases, the computed value can be trusted to be border-box.
    if ( ( !support.boxSizingReliable() && isBorderBox ||

        // Support: IE 10 - 11+, Edge 15 - 18+
        // IE/Edge misreport `getComputedStyle` of table rows with width/height
        // set in CSS while `offset*` properties report correct values.
        // Interestingly, in some cases IE 9 doesn't suffer from this issue.
        !support.reliableTrDimensions() && nodeName( elem, "tr" ) ||

        // Fall back to offsetWidth/offsetHeight when value is "auto"
        // This happens for inline elements with no explicit setting (gh-3571)
        val === "auto" ||

        // Support: Android <=4.1 - 4.3 only
        // Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
        !parseFloat( val ) && jQuery.css( elem, "display", false, styles ) === "inline" ) &&

        // Make sure the element is visible & connected
        elem.getClientRects().length ) {

        isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

        // Where available, offsetWidth/offsetHeight approximate border box dimensions.
        // Where not available (e.g., SVG), assume unreliable box-sizing and interpret the
        // retrieved value as a content box dimension.
        valueIsBorderBox = offsetProp in elem;
        if ( valueIsBorderBox ) {
            val = elem[ offsetProp ];
        }
    }

    // Normalize "" and auto
    val = parseFloat( val ) || 0;

    // Adjust for the element's box model
    return ( val +
        boxModelAdjustment(
            elem,
            dimension,
            extra || ( isBorderBox ? "border" : "content" ),
            valueIsBorderBox,
            styles,

            // Provide the current computed size to request scroll gutter calculation (gh-3589)
            val
        )
    ) + "px";
}

jQuery.extend( {

    // Add in style property hooks for overriding the default
    // behavior of getting and setting a style property
    cssHooks: {
        opacity: {
            get: function( elem, computed ) {
                if ( computed ) {

                    // We should always get a number back from opacity
                    var ret = curCSS( elem, "opacity" );
                    return ret === "" ? "1" : ret;
                }
            }
        }
    },

    // Don't automatically add "px" to these possibly-unitless properties
    cssNumber: {
        "animationIterationCount": true,
        "columnCount": true,
        "fillOpacity": true,
        "flexGrow": true,
        "flexShrink": true,
        "fontWeight": true,
        "gridArea": true,
        "gridColumn": true,
        "gridColumnEnd": true,
        "gridColumnStart": true,
        "gridRow": true,
        "gridRowEnd": true,
        "gridRowStart": true,
        "lineHeight": true,
        "opacity": true,
        "order": true,
        "orphans": true,
        "widows": true,
        "zIndex": true,
        "zoom": true
    },

    // Add in properties whose names you wish to fix before
    // setting or getting the value
    cssProps: {},

    // Get and set the style property on a DOM Node
    style: function( elem, name, value, extra ) {

        // Don't set styles on text and comment nodes
        if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
            return;
        }

        // Make sure that we're working with the right name
        var ret, type, hooks,
            origName = camelCase( name ),
            isCustomProp = rcustomProp.test( name ),
            style = elem.style;

        // Make sure that we're working with the right name. We don't
        // want to query the value if it is a CSS custom property
        // since they are user-defined.
        if ( !isCustomProp ) {
            name = finalPropName( origName );
        }

        // Gets hook for the prefixed version, then unprefixed version
        hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

        // Check if we're setting a value
        if ( value !== undefined ) {
            type = typeof value;

            // Convert "+=" or "-=" to relative numbers (#7345)
            if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
                value = adjustCSS( elem, name, ret );

                // Fixes bug #9237
                type = "number";
            }

            // Make sure that null and NaN values aren't set (#7116)
            if ( value == null || value !== value ) {
                return;
            }

            // If a number was passed in, add the unit (except for certain CSS properties)
            // The isCustomProp check can be removed in jQuery 4.0 when we only auto-append
            // "px" to a few hardcoded values.
            if ( type === "number" && !isCustomProp ) {
                value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
            }

            // background-* props affect original clone's values
            if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
                style[ name ] = "inherit";
            }

            // If a hook was provided, use that value, otherwise just set the specified value
            if ( !hooks || !( "set" in hooks ) ||
                ( value = hooks.set( elem, value, extra ) ) !== undefined ) {

                if ( isCustomProp ) {
                    style.setProperty( name, value );
                } else {
                    style[ name ] = value;
                }
            }

        } else {

            // If a hook was provided get the non-computed value from there
            if ( hooks && "get" in hooks &&
                ( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

                return ret;
            }

            // Otherwise just get the value from the style object
            return style[ name ];
        }
    },

    css: function( elem, name, extra, styles ) {
        var val, num, hooks,
            origName = camelCase( name ),
            isCustomProp = rcustomProp.test( name );

        // Make sure that we're working with the right name. We don't
        // want to modify the value if it is a CSS custom property
        // since they are user-defined.
        if ( !isCustomProp ) {
            name = finalPropName( origName );
        }

        // Try prefixed name followed by the unprefixed name
        hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

        // If a hook was provided get the computed value from there
        if ( hooks && "get" in hooks ) {
            val = hooks.get( elem, true, extra );
        }

        // Otherwise, if a way to get the computed value exists, use that
        if ( val === undefined ) {
            val = curCSS( elem, name, styles );
        }

        // Convert "normal" to computed value
        if ( val === "normal" && name in cssNormalTransform ) {
            val = cssNormalTransform[ name ];
        }

        // Make numeric if forced or a qualifier was provided and val looks numeric
        if ( extra === "" || extra ) {
            num = parseFloat( val );
            return extra === true || isFinite( num ) ? num || 0 : val;
        }

        return val;
    }
} );

jQuery.each( [ "height", "width" ], function( _i, dimension ) {
    jQuery.cssHooks[ dimension ] = {
        get: function( elem, computed, extra ) {
            if ( computed ) {

                // Certain elements can have dimension info if we invisibly show them
                // but it must have a current display style that would benefit
                return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&

                    // Support: Safari 8+
                    // Table columns in Safari have non-zero offsetWidth & zero
                    // getBoundingClientRect().width unless display is changed.
                    // Support: IE <=11 only
                    // Running getBoundingClientRect on a disconnected node
                    // in IE throws an error.
                    ( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
                        swap( elem, cssShow, function() {
                            return getWidthOrHeight( elem, dimension, extra );
                        } ) :
                        getWidthOrHeight( elem, dimension, extra );
            }
        },

        set: function( elem, value, extra ) {
            var matches,
                styles = getStyles( elem ),

                // Only read styles.position if the test has a chance to fail
                // to avoid forcing a reflow.
                scrollboxSizeBuggy = !support.scrollboxSize() &&
                    styles.position === "absolute",

                // To avoid forcing a reflow, only fetch boxSizing if we need it (gh-3991)
                boxSizingNeeded = scrollboxSizeBuggy || extra,
                isBorderBox = boxSizingNeeded &&
                    jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
                subtract = extra ?
                    boxModelAdjustment(
                        elem,
                        dimension,
                        extra,
                        isBorderBox,
                        styles
                    ) :
                    0;

            // Account for unreliable border-box dimensions by comparing offset* to computed and
            // faking a content-box to get border and padding (gh-3699)
            if ( isBorderBox && scrollboxSizeBuggy ) {
                subtract -= Math.ceil(
                    elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
                    parseFloat( styles[ dimension ] ) -
                    boxModelAdjustment( elem, dimension, "border", false, styles ) -
                    0.5
                );
            }

            // Convert to pixels if value adjustment is needed
            if ( subtract && ( matches = rcssNum.exec( value ) ) &&
                ( matches[ 3 ] || "px" ) !== "px" ) {

                elem.style[ dimension ] = value;
                value = jQuery.css( elem, dimension );
            }

            return setPositiveNumber( elem, value, subtract );
        }
    };
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
    function( elem, computed ) {
        if ( computed ) {
            return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
                elem.getBoundingClientRect().left -
                    swap( elem, { marginLeft: 0 }, function() {
                        return elem.getBoundingClientRect().left;
                    } )
                ) + "px";
        }
    }
);

// These hooks are used by animate to expand properties
jQuery.each( {
    margin: "",
    padding: "",
    border: "Width"
}, function( prefix, suffix ) {
    jQuery.cssHooks[ prefix + suffix ] = {
        expand: function( value ) {
            var i = 0,
                expanded = {},

                // Assumes a single number if not a string
                parts = typeof value === "string" ? value.split( " " ) : [ value ];

            for ( ; i < 4; i++ ) {
                expanded[ prefix + cssExpand[ i ] + suffix ] =
                    parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
            }

            return expanded;
        }
    };

    if ( prefix !== "margin" ) {
        jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
    }
} );

jQuery.fn.extend( {
    css: function( name, value ) {
        return access( this, function( elem, name, value ) {
            var styles, len,
                map = {},
                i = 0;

            if ( Array.isArray( name ) ) {
                styles = getStyles( elem );
                len = name.length;

                for ( ; i < len; i++ ) {
                    map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
                }

                return map;
            }

            return value !== undefined ?
                jQuery.style( elem, name, value ) :
                jQuery.css( elem, name );
        }, name, value, arguments.length > 1 );
    }
} );


function Tween( elem, options, prop, end, easing ) {
    return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
    constructor: Tween,
    init: function( elem, options, prop, end, easing, unit ) {
        this.elem = elem;
        this.prop = prop;
        this.easing = easing || jQuery.easing._default;
        this.options = options;
        this.start = this.now = this.cur();
        this.end = end;
        this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
    },
    cur: function() {
        var hooks = Tween.propHooks[ this.prop ];

        return hooks && hooks.get ?
            hooks.get( this ) :
            Tween.propHooks._default.get( this );
    },
    run: function( percent ) {
        var eased,
            hooks = Tween.propHooks[ this.prop ];

        if ( this.options.duration ) {
            this.pos = eased = jQuery.easing[ this.easing ](
                percent, this.options.duration * percent, 0, 1, this.options.duration
            );
        } else {
            this.pos = eased = percent;
        }
        this.now = ( this.end - this.start ) * eased + this.start;

        if ( this.options.step ) {
            this.options.step.call( this.elem, this.now, this );
        }

        if ( hooks && hooks.set ) {
            hooks.set( this );
        } else {
            Tween.propHooks._default.set( this );
        }
        return this;
    }
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
    _default: {
        get: function( tween ) {
            var result;

            // Use a property on the element directly when it is not a DOM element,
            // or when there is no matching style property that exists.
            if ( tween.elem.nodeType !== 1 ||
                tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
                return tween.elem[ tween.prop ];
            }

            // Passing an empty string as a 3rd parameter to .css will automatically
            // attempt a parseFloat and fallback to a string if the parse fails.
            // Simple values such as "10px" are parsed to Float;
            // complex values such as "rotate(1rad)" are returned as-is.
            result = jQuery.css( tween.elem, tween.prop, "" );

            // Empty strings, null, undefined and "auto" are converted to 0.
            return !result || result === "auto" ? 0 : result;
        },
        set: function( tween ) {

            // Use step hook for back compat.
            // Use cssHook if its there.
            // Use .style if available and use plain properties where available.
            if ( jQuery.fx.step[ tween.prop ] ) {
                jQuery.fx.step[ tween.prop ]( tween );
            } else if ( tween.elem.nodeType === 1 && (
                    jQuery.cssHooks[ tween.prop ] ||
                    tween.elem.style[ finalPropName( tween.prop ) ] != null ) ) {
                jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
            } else {
                tween.elem[ tween.prop ] = tween.now;
            }
        }
    }
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
    set: function( tween ) {
        if ( tween.elem.nodeType && tween.elem.parentNode ) {
            tween.elem[ tween.prop ] = tween.now;
        }
    }
};

jQuery.easing = {
    linear: function( p ) {
        return p;
    },
    swing: function( p ) {
        return 0.5 - Math.cos( p * Math.PI ) / 2;
    },
    _default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
    fxNow, inProgress,
    rfxtypes = /^(?:toggle|show|hide)$/,
    rrun = /queueHooks$/;

function schedule() {
    if ( inProgress ) {
        if ( document.hidden === false && window.requestAnimationFrame ) {
            window.requestAnimationFrame( schedule );
        } else {
            window.setTimeout( schedule, jQuery.fx.interval );
        }

        jQuery.fx.tick();
    }
}

// Animations created synchronously will run synchronously
function createFxNow() {
    window.setTimeout( function() {
        fxNow = undefined;
    } );
    return ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
    var which,
        i = 0,
        attrs = { height: type };

    // If we include width, step value is 1 to do all cssExpand values,
    // otherwise step value is 2 to skip over Left and Right
    includeWidth = includeWidth ? 1 : 0;
    for ( ; i < 4; i += 2 - includeWidth ) {
        which = cssExpand[ i ];
        attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
    }

    if ( includeWidth ) {
        attrs.opacity = attrs.width = type;
    }

    return attrs;
}

function createTween( value, prop, animation ) {
    var tween,
        collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
        index = 0,
        length = collection.length;
    for ( ; index < length; index++ ) {
        if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

            // We're done with this property
            return tween;
        }
    }
}

function defaultPrefilter( elem, props, opts ) {
    var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
        isBox = "width" in props || "height" in props,
        anim = this,
        orig = {},
        style = elem.style,
        hidden = elem.nodeType && isHiddenWithinTree( elem ),
        dataShow = dataPriv.get( elem, "fxshow" );

    // Queue-skipping animations hijack the fx hooks
    if ( !opts.queue ) {
        hooks = jQuery._queueHooks( elem, "fx" );
        if ( hooks.unqueued == null ) {
            hooks.unqueued = 0;
            oldfire = hooks.empty.fire;
            hooks.empty.fire = function() {
                if ( !hooks.unqueued ) {
                    oldfire();
                }
            };
        }
        hooks.unqueued++;

        anim.always( function() {

            // Ensure the complete handler is called before this completes
            anim.always( function() {
                hooks.unqueued--;
                if ( !jQuery.queue( elem, "fx" ).length ) {
                    hooks.empty.fire();
                }
            } );
        } );
    }

    // Detect show/hide animations
    for ( prop in props ) {
        value = props[ prop ];
        if ( rfxtypes.test( value ) ) {
            delete props[ prop ];
            toggle = toggle || value === "toggle";
            if ( value === ( hidden ? "hide" : "show" ) ) {

                // Pretend to be hidden if this is a "show" and
                // there is still data from a stopped show/hide
                if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
                    hidden = true;

                // Ignore all other no-op show/hide data
                } else {
                    continue;
                }
            }
            orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
        }
    }

    // Bail out if this is a no-op like .hide().hide()
    propTween = !jQuery.isEmptyObject( props );
    if ( !propTween && jQuery.isEmptyObject( orig ) ) {
        return;
    }

    // Restrict "overflow" and "display" styles during box animations
    if ( isBox && elem.nodeType === 1 ) {

        // Support: IE <=9 - 11, Edge 12 - 15
        // Record all 3 overflow attributes because IE does not infer the shorthand
        // from identically-valued overflowX and overflowY and Edge just mirrors
        // the overflowX value there.
        opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

        // Identify a display type, preferring old show/hide data over the CSS cascade
        restoreDisplay = dataShow && dataShow.display;
        if ( restoreDisplay == null ) {
            restoreDisplay = dataPriv.get( elem, "display" );
        }
        display = jQuery.css( elem, "display" );
        if ( display === "none" ) {
            if ( restoreDisplay ) {
                display = restoreDisplay;
            } else {

                // Get nonempty value(s) by temporarily forcing visibility
                showHide( [ elem ], true );
                restoreDisplay = elem.style.display || restoreDisplay;
                display = jQuery.css( elem, "display" );
                showHide( [ elem ] );
            }
        }

        // Animate inline elements as inline-block
        if ( display === "inline" || display === "inline-block" && restoreDisplay != null ) {
            if ( jQuery.css( elem, "float" ) === "none" ) {

                // Restore the original display value at the end of pure show/hide animations
                if ( !propTween ) {
                    anim.done( function() {
                        style.display = restoreDisplay;
                    } );
                    if ( restoreDisplay == null ) {
                        display = style.display;
                        restoreDisplay = display === "none" ? "" : display;
                    }
                }
                style.display = "inline-block";
            }
        }
    }

    if ( opts.overflow ) {
        style.overflow = "hidden";
        anim.always( function() {
            style.overflow = opts.overflow[ 0 ];
            style.overflowX = opts.overflow[ 1 ];
            style.overflowY = opts.overflow[ 2 ];
        } );
    }

    // Implement show/hide animations
    propTween = false;
    for ( prop in orig ) {

        // General show/hide setup for this element animation
        if ( !propTween ) {
            if ( dataShow ) {
                if ( "hidden" in dataShow ) {
                    hidden = dataShow.hidden;
                }
            } else {
                dataShow = dataPriv.access( elem, "fxshow", { display: restoreDisplay } );
            }

            // Store hidden/visible for toggle so `.stop().toggle()` "reverses"
            if ( toggle ) {
                dataShow.hidden = !hidden;
            }

            // Show elements before animating them
            if ( hidden ) {
                showHide( [ elem ], true );
            }

            /* eslint-disable no-loop-func */

            anim.done( function() {

            /* eslint-enable no-loop-func */

                // The final step of a "hide" animation is actually hiding the element
                if ( !hidden ) {
                    showHide( [ elem ] );
                }
                dataPriv.remove( elem, "fxshow" );
                for ( prop in orig ) {
                    jQuery.style( elem, prop, orig[ prop ] );
                }
            } );
        }

        // Per-property setup
        propTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
        if ( !( prop in dataShow ) ) {
            dataShow[ prop ] = propTween.start;
            if ( hidden ) {
                propTween.end = propTween.start;
                propTween.start = 0;
            }
        }
    }
}

function propFilter( props, specialEasing ) {
    var index, name, easing, value, hooks;

    // camelCase, specialEasing and expand cssHook pass
    for ( index in props ) {
        name = camelCase( index );
        easing = specialEasing[ name ];
        value = props[ index ];
        if ( Array.isArray( value ) ) {
            easing = value[ 1 ];
            value = props[ index ] = value[ 0 ];
        }

        if ( index !== name ) {
            props[ name ] = value;
            delete props[ index ];
        }

        hooks = jQuery.cssHooks[ name ];
        if ( hooks && "expand" in hooks ) {
            value = hooks.expand( value );
            delete props[ name ];

            // Not quite $.extend, this won't overwrite existing keys.
            // Reusing 'index' because we have the correct "name"
            for ( index in value ) {
                if ( !( index in props ) ) {
                    props[ index ] = value[ index ];
                    specialEasing[ index ] = easing;
                }
            }
        } else {
            specialEasing[ name ] = easing;
        }
    }
}

function Animation( elem, properties, options ) {
    var result,
        stopped,
        index = 0,
        length = Animation.prefilters.length,
        deferred = jQuery.Deferred().always( function() {

            // Don't match elem in the :animated selector
            delete tick.elem;
        } ),
        tick = function() {
            if ( stopped ) {
                return false;
            }
            var currentTime = fxNow || createFxNow(),
                remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

                // Support: Android 2.3 only
                // Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
                temp = remaining / animation.duration || 0,
                percent = 1 - temp,
                index = 0,
                length = animation.tweens.length;

            for ( ; index < length; index++ ) {
                animation.tweens[ index ].run( percent );
            }

            deferred.notifyWith( elem, [ animation, percent, remaining ] );

            // If there's more to do, yield
            if ( percent < 1 && length ) {
                return remaining;
            }

            // If this was an empty animation, synthesize a final progress notification
            if ( !length ) {
                deferred.notifyWith( elem, [ animation, 1, 0 ] );
            }

            // Resolve the animation and report its conclusion
            deferred.resolveWith( elem, [ animation ] );
            return false;
        },
        animation = deferred.promise( {
            elem: elem,
            props: jQuery.extend( {}, properties ),
            opts: jQuery.extend( true, {
                specialEasing: {},
                easing: jQuery.easing._default
            }, options ),
            originalProperties: properties,
            originalOptions: options,
            startTime: fxNow || createFxNow(),
            duration: options.duration,
            tweens: [],
            createTween: function( prop, end ) {
                var tween = jQuery.Tween( elem, animation.opts, prop, end,
                        animation.opts.specialEasing[ prop ] || animation.opts.easing );
                animation.tweens.push( tween );
                return tween;
            },
            stop: function( gotoEnd ) {
                var index = 0,

                    // If we are going to the end, we want to run all the tweens
                    // otherwise we skip this part
                    length = gotoEnd ? animation.tweens.length : 0;
                if ( stopped ) {
                    return this;
                }
                stopped = true;
                for ( ; index < length; index++ ) {
                    animation.tweens[ index ].run( 1 );
                }

                // Resolve when we played the last frame; otherwise, reject
                if ( gotoEnd ) {
                    deferred.notifyWith( elem, [ animation, 1, 0 ] );
                    deferred.resolveWith( elem, [ animation, gotoEnd ] );
                } else {
                    deferred.rejectWith( elem, [ animation, gotoEnd ] );
                }
                return this;
            }
        } ),
        props = animation.props;

    propFilter( props, animation.opts.specialEasing );

    for ( ; index < length; index++ ) {
        result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
        if ( result ) {
            if ( isFunction( result.stop ) ) {
                jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
                    result.stop.bind( result );
            }
            return result;
        }
    }

    jQuery.map( props, createTween, animation );

    if ( isFunction( animation.opts.start ) ) {
        animation.opts.start.call( elem, animation );
    }

    // Attach callbacks from options
    animation
        .progress( animation.opts.progress )
        .done( animation.opts.done, animation.opts.complete )
        .fail( animation.opts.fail )
        .always( animation.opts.always );

    jQuery.fx.timer(
        jQuery.extend( tick, {
            elem: elem,
            anim: animation,
            queue: animation.opts.queue
        } )
    );

    return animation;
}

jQuery.Animation = jQuery.extend( Animation, {

    tweeners: {
        "*": [ function( prop, value ) {
            var tween = this.createTween( prop, value );
            adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
            return tween;
        } ]
    },

    tweener: function( props, callback ) {
        if ( isFunction( props ) ) {
            callback = props;
            props = [ "*" ];
        } else {
            props = props.match( rnothtmlwhite );
        }

        var prop,
            index = 0,
            length = props.length;

        for ( ; index < length; index++ ) {
            prop = props[ index ];
            Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
            Animation.tweeners[ prop ].unshift( callback );
        }
    },

    prefilters: [ defaultPrefilter ],

    prefilter: function( callback, prepend ) {
        if ( prepend ) {
            Animation.prefilters.unshift( callback );
        } else {
            Animation.prefilters.push( callback );
        }
    }
} );

jQuery.speed = function( speed, easing, fn ) {
    var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
        complete: fn || !fn && easing ||
            isFunction( speed ) && speed,
        duration: speed,
        easing: fn && easing || easing && !isFunction( easing ) && easing
    };

    // Go to the end state if fx are off
    if ( jQuery.fx.off ) {
        opt.duration = 0;

    } else {
        if ( typeof opt.duration !== "number" ) {
            if ( opt.duration in jQuery.fx.speeds ) {
                opt.duration = jQuery.fx.speeds[ opt.duration ];

            } else {
                opt.duration = jQuery.fx.speeds._default;
            }
        }
    }

    // Normalize opt.queue - true/undefined/null -> "fx"
    if ( opt.queue == null || opt.queue === true ) {
        opt.queue = "fx";
    }

    // Queueing
    opt.old = opt.complete;

    opt.complete = function() {
        if ( isFunction( opt.old ) ) {
            opt.old.call( this );
        }

        if ( opt.queue ) {
            jQuery.dequeue( this, opt.queue );
        }
    };

    return opt;
};

jQuery.fn.extend( {
    fadeTo: function( speed, to, easing, callback ) {

        // Show any hidden elements after setting opacity to 0
        return this.filter( isHiddenWithinTree ).css( "opacity", 0 ).show()

            // Animate to the value specified
            .end().animate( { opacity: to }, speed, easing, callback );
    },
    animate: function( prop, speed, easing, callback ) {
        var empty = jQuery.isEmptyObject( prop ),
            optall = jQuery.speed( speed, easing, callback ),
            doAnimation = function() {

                // Operate on a copy of prop so per-property easing won't be lost
                var anim = Animation( this, jQuery.extend( {}, prop ), optall );

                // Empty animations, or finishing resolves immediately
                if ( empty || dataPriv.get( this, "finish" ) ) {
                    anim.stop( true );
                }
            };
            doAnimation.finish = doAnimation;

        return empty || optall.queue === false ?
            this.each( doAnimation ) :
            this.queue( optall.queue, doAnimation );
    },
    stop: function( type, clearQueue, gotoEnd ) {
        var stopQueue = function( hooks ) {
            var stop = hooks.stop;
            delete hooks.stop;
            stop( gotoEnd );
        };

        if ( typeof type !== "string" ) {
            gotoEnd = clearQueue;
            clearQueue = type;
            type = undefined;
        }
        if ( clearQueue ) {
            this.queue( type || "fx", [] );
        }

        return this.each( function() {
            var dequeue = true,
                index = type != null && type + "queueHooks",
                timers = jQuery.timers,
                data = dataPriv.get( this );

            if ( index ) {
                if ( data[ index ] && data[ index ].stop ) {
                    stopQueue( data[ index ] );
                }
            } else {
                for ( index in data ) {
                    if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
                        stopQueue( data[ index ] );
                    }
                }
            }

            for ( index = timers.length; index--; ) {
                if ( timers[ index ].elem === this &&
                    ( type == null || timers[ index ].queue === type ) ) {

                    timers[ index ].anim.stop( gotoEnd );
                    dequeue = false;
                    timers.splice( index, 1 );
                }
            }

            // Start the next in the queue if the last step wasn't forced.
            // Timers currently will call their complete callbacks, which
            // will dequeue but only if they were gotoEnd.
            if ( dequeue || !gotoEnd ) {
                jQuery.dequeue( this, type );
            }
        } );
    },
    finish: function( type ) {
        if ( type !== false ) {
            type = type || "fx";
        }
        return this.each( function() {
            var index,
                data = dataPriv.get( this ),
                queue = data[ type + "queue" ],
                hooks = data[ type + "queueHooks" ],
                timers = jQuery.timers,
                length = queue ? queue.length : 0;

            // Enable finishing flag on private data
            data.finish = true;

            // Empty the queue first
            jQuery.queue( this, type, [] );

            if ( hooks && hooks.stop ) {
                hooks.stop.call( this, true );
            }

            // Look for any active animations, and finish them
            for ( index = timers.length; index--; ) {
                if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
                    timers[ index ].anim.stop( true );
                    timers.splice( index, 1 );
                }
            }

            // Look for any animations in the old queue and finish them
            for ( index = 0; index < length; index++ ) {
                if ( queue[ index ] && queue[ index ].finish ) {
                    queue[ index ].finish.call( this );
                }
            }

            // Turn off finishing flag
            delete data.finish;
        } );
    }
} );

jQuery.each( [ "toggle", "show", "hide" ], function( _i, name ) {
    var cssFn = jQuery.fn[ name ];
    jQuery.fn[ name ] = function( speed, easing, callback ) {
        return speed == null || typeof speed === "boolean" ?
            cssFn.apply( this, arguments ) :
            this.animate( genFx( name, true ), speed, easing, callback );
    };
} );

// Generate shortcuts for custom animations
jQuery.each( {
    slideDown: genFx( "show" ),
    slideUp: genFx( "hide" ),
    slideToggle: genFx( "toggle" ),
    fadeIn: { opacity: "show" },
    fadeOut: { opacity: "hide" },
    fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
    jQuery.fn[ name ] = function( speed, easing, callback ) {
        return this.animate( props, speed, easing, callback );
    };
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
    var timer,
        i = 0,
        timers = jQuery.timers;

    fxNow = Date.now();

    for ( ; i < timers.length; i++ ) {
        timer = timers[ i ];

        // Run the timer and safely remove it when done (allowing for external removal)
        if ( !timer() && timers[ i ] === timer ) {
            timers.splice( i--, 1 );
        }
    }

    if ( !timers.length ) {
        jQuery.fx.stop();
    }
    fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
    jQuery.timers.push( timer );
    jQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
    if ( inProgress ) {
        return;
    }

    inProgress = true;
    schedule();
};

jQuery.fx.stop = function() {
    inProgress = null;
};

jQuery.fx.speeds = {
    slow: 600,
    fast: 200,

    // Default speed
    _default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
    time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
    type = type || "fx";

    return this.queue( type, function( next, hooks ) {
        var timeout = window.setTimeout( next, time );
        hooks.stop = function() {
            window.clearTimeout( timeout );
        };
    } );
};


( function() {
    var input = document.createElement( "input" ),
        select = document.createElement( "select" ),
        opt = select.appendChild( document.createElement( "option" ) );

    input.type = "checkbox";

    // Support: Android <=4.3 only
    // Default value for a checkbox should be "on"
    support.checkOn = input.value !== "";

    // Support: IE <=11 only
    // Must access selectedIndex to make default options select
    support.optSelected = opt.selected;

    // Support: IE <=11 only
    // An input loses its value after becoming a radio
    input = document.createElement( "input" );
    input.value = "t";
    input.type = "radio";
    support.radioValue = input.value === "t";
} )();


var boolHook,
    attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
    attr: function( name, value ) {
        return access( this, jQuery.attr, name, value, arguments.length > 1 );
    },

    removeAttr: function( name ) {
        return this.each( function() {
            jQuery.removeAttr( this, name );
        } );
    }
} );

jQuery.extend( {
    attr: function( elem, name, value ) {
        var ret, hooks,
            nType = elem.nodeType;

        // Don't get/set attributes on text, comment and attribute nodes
        if ( nType === 3 || nType === 8 || nType === 2 ) {
            return;
        }

        // Fallback to prop when attributes are not supported
        if ( typeof elem.getAttribute === "undefined" ) {
            return jQuery.prop( elem, name, value );
        }

        // Attribute hooks are determined by the lowercase version
        // Grab necessary hook if one is defined
        if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
            hooks = jQuery.attrHooks[ name.toLowerCase() ] ||
                ( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
        }

        if ( value !== undefined ) {
            if ( value === null ) {
                jQuery.removeAttr( elem, name );
                return;
            }

            if ( hooks && "set" in hooks &&
                ( ret = hooks.set( elem, value, name ) ) !== undefined ) {
                return ret;
            }

            elem.setAttribute( name, value + "" );
            return value;
        }

        if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
            return ret;
        }

        ret = jQuery.find.attr( elem, name );

        // Non-existent attributes return null, we normalize to undefined
        return ret == null ? undefined : ret;
    },

    attrHooks: {
        type: {
            set: function( elem, value ) {
                if ( !support.radioValue && value === "radio" &&
                    nodeName( elem, "input" ) ) {
                    var val = elem.value;
                    elem.setAttribute( "type", value );
                    if ( val ) {
                        elem.value = val;
                    }
                    return value;
                }
            }
        }
    },

    removeAttr: function( elem, value ) {
        var name,
            i = 0,

            // Attribute names can contain non-HTML whitespace characters
            // https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
            attrNames = value && value.match( rnothtmlwhite );

        if ( attrNames && elem.nodeType === 1 ) {
            while ( ( name = attrNames[ i++ ] ) ) {
                elem.removeAttribute( name );
            }
        }
    }
} );

// Hooks for boolean attributes
boolHook = {
    set: function( elem, value, name ) {
        if ( value === false ) {

            // Remove boolean attributes when set to false
            jQuery.removeAttr( elem, name );
        } else {
            elem.setAttribute( name, name );
        }
        return name;
    }
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( _i, name ) {
    var getter = attrHandle[ name ] || jQuery.find.attr;

    attrHandle[ name ] = function( elem, name, isXML ) {
        var ret, handle,
            lowercaseName = name.toLowerCase();

        if ( !isXML ) {

            // Avoid an infinite loop by temporarily removing this function from the getter
            handle = attrHandle[ lowercaseName ];
            attrHandle[ lowercaseName ] = ret;
            ret = getter( elem, name, isXML ) != null ?
                lowercaseName :
                null;
            attrHandle[ lowercaseName ] = handle;
        }
        return ret;
    };
} );




var rfocusable = /^(?:input|select|textarea|button)$/i,
    rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
    prop: function( name, value ) {
        return access( this, jQuery.prop, name, value, arguments.length > 1 );
    },

    removeProp: function( name ) {
        return this.each( function() {
            delete this[ jQuery.propFix[ name ] || name ];
        } );
    }
} );

jQuery.extend( {
    prop: function( elem, name, value ) {
        var ret, hooks,
            nType = elem.nodeType;

        // Don't get/set properties on text, comment and attribute nodes
        if ( nType === 3 || nType === 8 || nType === 2 ) {
            return;
        }

        if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

            // Fix name and attach hooks
            name = jQuery.propFix[ name ] || name;
            hooks = jQuery.propHooks[ name ];
        }

        if ( value !== undefined ) {
            if ( hooks && "set" in hooks &&
                ( ret = hooks.set( elem, value, name ) ) !== undefined ) {
                return ret;
            }

            return ( elem[ name ] = value );
        }

        if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
            return ret;
        }

        return elem[ name ];
    },

    propHooks: {
        tabIndex: {
            get: function( elem ) {

                // Support: IE <=9 - 11 only
                // elem.tabIndex doesn't always return the
                // correct value when it hasn't been explicitly set
                // https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
                // Use proper attribute retrieval(#12072)
                var tabindex = jQuery.find.attr( elem, "tabindex" );

                if ( tabindex ) {
                    return parseInt( tabindex, 10 );
                }

                if (
                    rfocusable.test( elem.nodeName ) ||
                    rclickable.test( elem.nodeName ) &&
                    elem.href
                ) {
                    return 0;
                }

                return -1;
            }
        }
    },

    propFix: {
        "for": "htmlFor",
        "class": "className"
    }
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule "no-unused-expressions" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
    jQuery.propHooks.selected = {
        get: function( elem ) {

            /* eslint no-unused-expressions: "off" */

            var parent = elem.parentNode;
            if ( parent && parent.parentNode ) {
                parent.parentNode.selectedIndex;
            }
            return null;
        },
        set: function( elem ) {

            /* eslint no-unused-expressions: "off" */

            var parent = elem.parentNode;
            if ( parent ) {
                parent.selectedIndex;

                if ( parent.parentNode ) {
                    parent.parentNode.selectedIndex;
                }
            }
        }
    };
}

jQuery.each( [
    "tabIndex",
    "readOnly",
    "maxLength",
    "cellSpacing",
    "cellPadding",
    "rowSpan",
    "colSpan",
    "useMap",
    "frameBorder",
    "contentEditable"
], function() {
    jQuery.propFix[ this.toLowerCase() ] = this;
} );




    // Strip and collapse whitespace according to HTML spec
    // https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
    function stripAndCollapse( value ) {
        var tokens = value.match( rnothtmlwhite ) || [];
        return tokens.join( " " );
    }


function getClass( elem ) {
    return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

function classesToArray( value ) {
    if ( Array.isArray( value ) ) {
        return value;
    }
    if ( typeof value === "string" ) {
        return value.match( rnothtmlwhite ) || [];
    }
    return [];
}

jQuery.fn.extend( {
    addClass: function( value ) {
        var classes, elem, cur, curValue, clazz, j, finalValue,
            i = 0;

        if ( isFunction( value ) ) {
            return this.each( function( j ) {
                jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
            } );
        }

        classes = classesToArray( value );

        if ( classes.length ) {
            while ( ( elem = this[ i++ ] ) ) {
                curValue = getClass( elem );
                cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

                if ( cur ) {
                    j = 0;
                    while ( ( clazz = classes[ j++ ] ) ) {
                        if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
                            cur += clazz + " ";
                        }
                    }

                    // Only assign if different to avoid unneeded rendering.
                    finalValue = stripAndCollapse( cur );
                    if ( curValue !== finalValue ) {
                        elem.setAttribute( "class", finalValue );
                    }
                }
            }
        }

        return this;
    },

    removeClass: function( value ) {
        var classes, elem, cur, curValue, clazz, j, finalValue,
            i = 0;

        if ( isFunction( value ) ) {
            return this.each( function( j ) {
                jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
            } );
        }

        if ( !arguments.length ) {
            return this.attr( "class", "" );
        }

        classes = classesToArray( value );

        if ( classes.length ) {
            while ( ( elem = this[ i++ ] ) ) {
                curValue = getClass( elem );

                // This expression is here for better compressibility (see addClass)
                cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

                if ( cur ) {
                    j = 0;
                    while ( ( clazz = classes[ j++ ] ) ) {

                        // Remove *all* instances
                        while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
                            cur = cur.replace( " " + clazz + " ", " " );
                        }
                    }

                    // Only assign if different to avoid unneeded rendering.
                    finalValue = stripAndCollapse( cur );
                    if ( curValue !== finalValue ) {
                        elem.setAttribute( "class", finalValue );
                    }
                }
            }
        }

        return this;
    },

    toggleClass: function( value, stateVal ) {
        var type = typeof value,
            isValidValue = type === "string" || Array.isArray( value );

        if ( typeof stateVal === "boolean" && isValidValue ) {
            return stateVal ? this.addClass( value ) : this.removeClass( value );
        }

        if ( isFunction( value ) ) {
            return this.each( function( i ) {
                jQuery( this ).toggleClass(
                    value.call( this, i, getClass( this ), stateVal ),
                    stateVal
                );
            } );
        }

        return this.each( function() {
            var className, i, self, classNames;

            if ( isValidValue ) {

                // Toggle individual class names
                i = 0;
                self = jQuery( this );
                classNames = classesToArray( value );

                while ( ( className = classNames[ i++ ] ) ) {

                    // Check each className given, space separated list
                    if ( self.hasClass( className ) ) {
                        self.removeClass( className );
                    } else {
                        self.addClass( className );
                    }
                }

            // Toggle whole class name
            } else if ( value === undefined || type === "boolean" ) {
                className = getClass( this );
                if ( className ) {

                    // Store className if set
                    dataPriv.set( this, "__className__", className );
                }

                // If the element has a class name or if we're passed `false`,
                // then remove the whole classname (if there was one, the above saved it).
                // Otherwise bring back whatever was previously saved (if anything),
                // falling back to the empty string if nothing was stored.
                if ( this.setAttribute ) {
                    this.setAttribute( "class",
                        className || value === false ?
                        "" :
                        dataPriv.get( this, "__className__" ) || ""
                    );
                }
            }
        } );
    },

    hasClass: function( selector ) {
        var className, elem,
            i = 0;

        className = " " + selector + " ";
        while ( ( elem = this[ i++ ] ) ) {
            if ( elem.nodeType === 1 &&
                ( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
                    return true;
            }
        }

        return false;
    }
} );




var rreturn = /\r/g;

jQuery.fn.extend( {
    val: function( value ) {
        var hooks, ret, valueIsFunction,
            elem = this[ 0 ];

        if ( !arguments.length ) {
            if ( elem ) {
                hooks = jQuery.valHooks[ elem.type ] ||
                    jQuery.valHooks[ elem.nodeName.toLowerCase() ];

                if ( hooks &&
                    "get" in hooks &&
                    ( ret = hooks.get( elem, "value" ) ) !== undefined
                ) {
                    return ret;
                }

                ret = elem.value;

                // Handle most common string cases
                if ( typeof ret === "string" ) {
                    return ret.replace( rreturn, "" );
                }

                // Handle cases where value is null/undef or number
                return ret == null ? "" : ret;
            }

            return;
        }

        valueIsFunction = isFunction( value );

        return this.each( function( i ) {
            var val;

            if ( this.nodeType !== 1 ) {
                return;
            }

            if ( valueIsFunction ) {
                val = value.call( this, i, jQuery( this ).val() );
            } else {
                val = value;
            }

            // Treat null/undefined as ""; convert numbers to string
            if ( val == null ) {
                val = "";

            } else if ( typeof val === "number" ) {
                val += "";

            } else if ( Array.isArray( val ) ) {
                val = jQuery.map( val, function( value ) {
                    return value == null ? "" : value + "";
                } );
            }

            hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

            // If set returns undefined, fall back to normal setting
            if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
                this.value = val;
            }
        } );
    }
} );

jQuery.extend( {
    valHooks: {
        option: {
            get: function( elem ) {

                var val = jQuery.find.attr( elem, "value" );
                return val != null ?
                    val :

                    // Support: IE <=10 - 11 only
                    // option.text throws exceptions (#14686, #14858)
                    // Strip and collapse whitespace
                    // https://html.spec.whatwg.org/#strip-and-collapse-whitespace
                    stripAndCollapse( jQuery.text( elem ) );
            }
        },
        select: {
            get: function( elem ) {
                var value, option, i,
                    options = elem.options,
                    index = elem.selectedIndex,
                    one = elem.type === "select-one",
                    values = one ? null : [],
                    max = one ? index + 1 : options.length;

                if ( index < 0 ) {
                    i = max;

                } else {
                    i = one ? index : 0;
                }

                // Loop through all the selected options
                for ( ; i < max; i++ ) {
                    option = options[ i ];

                    // Support: IE <=9 only
                    // IE8-9 doesn't update selected after form reset (#2551)
                    if ( ( option.selected || i === index ) &&

                            // Don't return options that are disabled or in a disabled optgroup
                            !option.disabled &&
                            ( !option.parentNode.disabled ||
                                !nodeName( option.parentNode, "optgroup" ) ) ) {

                        // Get the specific value for the option
                        value = jQuery( option ).val();

                        // We don't need an array for one selects
                        if ( one ) {
                            return value;
                        }

                        // Multi-Selects return an array
                        values.push( value );
                    }
                }

                return values;
            },

            set: function( elem, value ) {
                var optionSet, option,
                    options = elem.options,
                    values = jQuery.makeArray( value ),
                    i = options.length;

                while ( i-- ) {
                    option = options[ i ];

                    /* eslint-disable no-cond-assign */

                    if ( option.selected =
                        jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
                    ) {
                        optionSet = true;
                    }

                    /* eslint-enable no-cond-assign */
                }

                // Force browsers to behave consistently when non-matching value is set
                if ( !optionSet ) {
                    elem.selectedIndex = -1;
                }
                return values;
            }
        }
    }
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
    jQuery.valHooks[ this ] = {
        set: function( elem, value ) {
            if ( Array.isArray( value ) ) {
                return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
            }
        }
    };
    if ( !support.checkOn ) {
        jQuery.valHooks[ this ].get = function( elem ) {
            return elem.getAttribute( "value" ) === null ? "on" : elem.value;
        };
    }
} );




// Return jQuery for attributes-only inclusion


support.focusin = "onfocusin" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
    stopPropagationCallback = function( e ) {
        e.stopPropagation();
    };

jQuery.extend( jQuery.event, {

    trigger: function( event, data, elem, onlyHandlers ) {

        var i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
            eventPath = [ elem || document ],
            type = hasOwn.call( event, "type" ) ? event.type : event,
            namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

        cur = lastElement = tmp = elem = elem || document;

        // Don't do events on text and comment nodes
        if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
            return;
        }

        // focus/blur morphs to focusin/out; ensure we're not firing them right now
        if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
            return;
        }

        if ( type.indexOf( "." ) > -1 ) {

            // Namespaced trigger; create a regexp to match event type in handle()
            namespaces = type.split( "." );
            type = namespaces.shift();
            namespaces.sort();
        }
        ontype = type.indexOf( ":" ) < 0 && "on" + type;

        // Caller can pass in a jQuery.Event object, Object, or just an event type string
        event = event[ jQuery.expando ] ?
            event :
            new jQuery.Event( type, typeof event === "object" && event );

        // Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
        event.isTrigger = onlyHandlers ? 2 : 3;
        event.namespace = namespaces.join( "." );
        event.rnamespace = event.namespace ?
            new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
            null;

        // Clean up the event in case it is being reused
        event.result = undefined;
        if ( !event.target ) {
            event.target = elem;
        }

        // Clone any incoming data and prepend the event, creating the handler arg list
        data = data == null ?
            [ event ] :
            jQuery.makeArray( data, [ event ] );

        // Allow special events to draw outside the lines
        special = jQuery.event.special[ type ] || {};
        if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
            return;
        }

        // Determine event propagation path in advance, per W3C events spec (#9951)
        // Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
        if ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

            bubbleType = special.delegateType || type;
            if ( !rfocusMorph.test( bubbleType + type ) ) {
                cur = cur.parentNode;
            }
            for ( ; cur; cur = cur.parentNode ) {
                eventPath.push( cur );
                tmp = cur;
            }

            // Only add window if we got to document (e.g., not plain obj or detached DOM)
            if ( tmp === ( elem.ownerDocument || document ) ) {
                eventPath.push( tmp.defaultView || tmp.parentWindow || window );
            }
        }

        // Fire handlers on the event path
        i = 0;
        while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
            lastElement = cur;
            event.type = i > 1 ?
                bubbleType :
                special.bindType || type;

            // jQuery handler
            handle = (
                    dataPriv.get( cur, "events" ) || Object.create( null )
                )[ event.type ] &&
                dataPriv.get( cur, "handle" );
            if ( handle ) {
                handle.apply( cur, data );
            }

            // Native handler
            handle = ontype && cur[ ontype ];
            if ( handle && handle.apply && acceptData( cur ) ) {
                event.result = handle.apply( cur, data );
                if ( event.result === false ) {
                    event.preventDefault();
                }
            }
        }
        event.type = type;

        // If nobody prevented the default action, do it now
        if ( !onlyHandlers && !event.isDefaultPrevented() ) {

            if ( ( !special._default ||
                special._default.apply( eventPath.pop(), data ) === false ) &&
                acceptData( elem ) ) {

                // Call a native DOM method on the target with the same name as the event.
                // Don't do default actions on window, that's where global variables be (#6170)
                if ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

                    // Don't re-trigger an onFOO event when we call its FOO() method
                    tmp = elem[ ontype ];

                    if ( tmp ) {
                        elem[ ontype ] = null;
                    }

                    // Prevent re-triggering of the same event, since we already bubbled it above
                    jQuery.event.triggered = type;

                    if ( event.isPropagationStopped() ) {
                        lastElement.addEventListener( type, stopPropagationCallback );
                    }

                    elem[ type ]();

                    if ( event.isPropagationStopped() ) {
                        lastElement.removeEventListener( type, stopPropagationCallback );
                    }

                    jQuery.event.triggered = undefined;

                    if ( tmp ) {
                        elem[ ontype ] = tmp;
                    }
                }
            }
        }

        return event.result;
    },

    // Piggyback on a donor event to simulate a different one
    // Used only for `focus(in | out)` events
    simulate: function( type, elem, event ) {
        var e = jQuery.extend(
            new jQuery.Event(),
            event,
            {
                type: type,
                isSimulated: true
            }
        );

        jQuery.event.trigger( e, null, elem );
    }

} );

jQuery.fn.extend( {

    trigger: function( type, data ) {
        return this.each( function() {
            jQuery.event.trigger( type, data, this );
        } );
    },
    triggerHandler: function( type, data ) {
        var elem = this[ 0 ];
        if ( elem ) {
            return jQuery.event.trigger( type, data, elem, true );
        }
    }
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
    jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

        // Attach a single capturing handler on the document while someone wants focusin/focusout
        var handler = function( event ) {
            jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
        };

        jQuery.event.special[ fix ] = {
            setup: function() {

                // Handle: regular nodes (via `this.ownerDocument`), window
                // (via `this.document`) & document (via `this`).
                var doc = this.ownerDocument || this.document || this,
                    attaches = dataPriv.access( doc, fix );

                if ( !attaches ) {
                    doc.addEventListener( orig, handler, true );
                }
                dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
            },
            teardown: function() {
                var doc = this.ownerDocument || this.document || this,
                    attaches = dataPriv.access( doc, fix ) - 1;

                if ( !attaches ) {
                    doc.removeEventListener( orig, handler, true );
                    dataPriv.remove( doc, fix );

                } else {
                    dataPriv.access( doc, fix, attaches );
                }
            }
        };
    } );
}
var location = window.location;

var nonce = { guid: Date.now() };

var rquery = ( /\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
    var xml;
    if ( !data || typeof data !== "string" ) {
        return null;
    }

    // Support: IE 9 - 11 only
    // IE throws on parseFromString with invalid input.
    try {
        xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
    } catch ( e ) {
        xml = undefined;
    }

    if ( !xml || xml.getElementsByTagName( "parsererror" ).length ) {
        jQuery.error( "Invalid XML: " + data );
    }
    return xml;
};


var
    rbracket = /\[\]$/,
    rCRLF = /\r?\n/g,
    rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
    rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
    var name;

    if ( Array.isArray( obj ) ) {

        // Serialize array item.
        jQuery.each( obj, function( i, v ) {
            if ( traditional || rbracket.test( prefix ) ) {

                // Treat each array item as a scalar.
                add( prefix, v );

            } else {

                // Item is non-scalar (array or object), encode its numeric index.
                buildParams(
                    prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
                    v,
                    traditional,
                    add
                );
            }
        } );

    } else if ( !traditional && toType( obj ) === "object" ) {

        // Serialize object item.
        for ( name in obj ) {
            buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
        }

    } else {

        // Serialize scalar item.
        add( prefix, obj );
    }
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
    var prefix,
        s = [],
        add = function( key, valueOrFunction ) {

            // If value is a function, invoke it and use its return value
            var value = isFunction( valueOrFunction ) ?
                valueOrFunction() :
                valueOrFunction;

            s[ s.length ] = encodeURIComponent( key ) + "=" +
                encodeURIComponent( value == null ? "" : value );
        };

    if ( a == null ) {
        return "";
    }

    // If an array was passed in, assume that it is an array of form elements.
    if ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

        // Serialize the form elements
        jQuery.each( a, function() {
            add( this.name, this.value );
        } );

    } else {

        // If traditional, encode the "old" way (the way 1.3.2 or older
        // did it), otherwise encode params recursively.
        for ( prefix in a ) {
            buildParams( prefix, a[ prefix ], traditional, add );
        }
    }

    // Return the resulting serialization
    return s.join( "&" );
};

jQuery.fn.extend( {
    serialize: function() {
        return jQuery.param( this.serializeArray() );
    },
    serializeArray: function() {
        return this.map( function() {

            // Can add propHook for "elements" to filter or add form elements
            var elements = jQuery.prop( this, "elements" );
            return elements ? jQuery.makeArray( elements ) : this;
        } )
        .filter( function() {
            var type = this.type;

            // Use .is( ":disabled" ) so that fieldset[disabled] works
            return this.name && !jQuery( this ).is( ":disabled" ) &&
                rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
                ( this.checked || !rcheckableType.test( type ) );
        } )
        .map( function( _i, elem ) {
            var val = jQuery( this ).val();

            if ( val == null ) {
                return null;
            }

            if ( Array.isArray( val ) ) {
                return jQuery.map( val, function( val ) {
                    return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
                } );
            }

            return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
        } ).get();
    }
} );


var
    r20 = /%20/g,
    rhash = /#.*$/,
    rantiCache = /([?&])_=[^&]*/,
    rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

    // #7653, #8125, #8152: local protocol detection
    rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
    rnoContent = /^(?:GET|HEAD)$/,
    rprotocol = /^\/\//,

    /* Prefilters
     * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
     * 2) These are called:
     *    - BEFORE asking for a transport
     *    - AFTER param serialization (s.data is a string if s.processData is true)
     * 3) key is the dataType
     * 4) the catchall symbol "*" can be used
     * 5) execution will start with transport dataType and THEN continue down to "*" if needed
     */
    prefilters = {},

    /* Transports bindings
     * 1) key is the dataType
     * 2) the catchall symbol "*" can be used
     * 3) selection will start with transport dataType and THEN go to "*" if needed
     */
    transports = {},

    // Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
    allTypes = "*/".concat( "*" ),

    // Anchor tag for parsing the document origin
    originAnchor = document.createElement( "a" );
    originAnchor.href = location.href;

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

    // dataTypeExpression is optional and defaults to "*"
    return function( dataTypeExpression, func ) {

        if ( typeof dataTypeExpression !== "string" ) {
            func = dataTypeExpression;
            dataTypeExpression = "*";
        }

        var dataType,
            i = 0,
            dataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

        if ( isFunction( func ) ) {

            // For each dataType in the dataTypeExpression
            while ( ( dataType = dataTypes[ i++ ] ) ) {

                // Prepend if requested
                if ( dataType[ 0 ] === "+" ) {
                    dataType = dataType.slice( 1 ) || "*";
                    ( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

                // Otherwise append
                } else {
                    ( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
                }
            }
        }
    };
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

    var inspected = {},
        seekingTransport = ( structure === transports );

    function inspect( dataType ) {
        var selected;
        inspected[ dataType ] = true;
        jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
            var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
            if ( typeof dataTypeOrTransport === "string" &&
                !seekingTransport && !inspected[ dataTypeOrTransport ] ) {

                options.dataTypes.unshift( dataTypeOrTransport );
                inspect( dataTypeOrTransport );
                return false;
            } else if ( seekingTransport ) {
                return !( selected = dataTypeOrTransport );
            }
        } );
        return selected;
    }

    return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
    var key, deep,
        flatOptions = jQuery.ajaxSettings.flatOptions || {};

    for ( key in src ) {
        if ( src[ key ] !== undefined ) {
            ( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
        }
    }
    if ( deep ) {
        jQuery.extend( true, target, deep );
    }

    return target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

    var ct, type, finalDataType, firstDataType,
        contents = s.contents,
        dataTypes = s.dataTypes;

    // Remove auto dataType and get content-type in the process
    while ( dataTypes[ 0 ] === "*" ) {
        dataTypes.shift();
        if ( ct === undefined ) {
            ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
        }
    }

    // Check if we're dealing with a known content-type
    if ( ct ) {
        for ( type in contents ) {
            if ( contents[ type ] && contents[ type ].test( ct ) ) {
                dataTypes.unshift( type );
                break;
            }
        }
    }

    // Check to see if we have a response for the expected dataType
    if ( dataTypes[ 0 ] in responses ) {
        finalDataType = dataTypes[ 0 ];
    } else {

        // Try convertible dataTypes
        for ( type in responses ) {
            if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
                finalDataType = type;
                break;
            }
            if ( !firstDataType ) {
                firstDataType = type;
            }
        }

        // Or just use first one
        finalDataType = finalDataType || firstDataType;
    }

    // If we found a dataType
    // We add the dataType to the list if needed
    // and return the corresponding response
    if ( finalDataType ) {
        if ( finalDataType !== dataTypes[ 0 ] ) {
            dataTypes.unshift( finalDataType );
        }
        return responses[ finalDataType ];
    }
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
    var conv2, current, conv, tmp, prev,
        converters = {},

        // Work with a copy of dataTypes in case we need to modify it for conversion
        dataTypes = s.dataTypes.slice();

    // Create converters map with lowercased keys
    if ( dataTypes[ 1 ] ) {
        for ( conv in s.converters ) {
            converters[ conv.toLowerCase() ] = s.converters[ conv ];
        }
    }

    current = dataTypes.shift();

    // Convert to each sequential dataType
    while ( current ) {

        if ( s.responseFields[ current ] ) {
            jqXHR[ s.responseFields[ current ] ] = response;
        }

        // Apply the dataFilter if provided
        if ( !prev && isSuccess && s.dataFilter ) {
            response = s.dataFilter( response, s.dataType );
        }

        prev = current;
        current = dataTypes.shift();

        if ( current ) {

            // There's only work to do if current dataType is non-auto
            if ( current === "*" ) {

                current = prev;

            // Convert response if prev dataType is non-auto and differs from current
            } else if ( prev !== "*" && prev !== current ) {

                // Seek a direct converter
                conv = converters[ prev + " " + current ] || converters[ "* " + current ];

                // If none found, seek a pair
                if ( !conv ) {
                    for ( conv2 in converters ) {

                        // If conv2 outputs current
                        tmp = conv2.split( " " );
                        if ( tmp[ 1 ] === current ) {

                            // If prev can be converted to accepted input
                            conv = converters[ prev + " " + tmp[ 0 ] ] ||
                                converters[ "* " + tmp[ 0 ] ];
                            if ( conv ) {

                                // Condense equivalence converters
                                if ( conv === true ) {
                                    conv = converters[ conv2 ];

                                // Otherwise, insert the intermediate dataType
                                } else if ( converters[ conv2 ] !== true ) {
                                    current = tmp[ 0 ];
                                    dataTypes.unshift( tmp[ 1 ] );
                                }
                                break;
                            }
                        }
                    }
                }

                // Apply converter (if not an equivalence)
                if ( conv !== true ) {

                    // Unless errors are allowed to bubble, catch and return them
                    if ( conv && s.throws ) {
                        response = conv( response );
                    } else {
                        try {
                            response = conv( response );
                        } catch ( e ) {
                            return {
                                state: "parsererror",
                                error: conv ? e : "No conversion from " + prev + " to " + current
                            };
                        }
                    }
                }
            }
        }
    }

    return { state: "success", data: response };
}

jQuery.extend( {

    // Counter for holding the number of active queries
    active: 0,

    // Last-Modified header cache for next request
    lastModified: {},
    etag: {},

    ajaxSettings: {
        url: location.href,
        type: "GET",
        isLocal: rlocalProtocol.test( location.protocol ),
        global: true,
        processData: true,
        async: true,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",

        /*
        timeout: 0,
        data: null,
        dataType: null,
        username: null,
        password: null,
        cache: null,
        throws: false,
        traditional: false,
        headers: {},
        */

        accepts: {
            "*": allTypes,
            text: "text/plain",
            html: "text/html",
            xml: "application/xml, text/xml",
            json: "application/json, text/javascript"
        },

        contents: {
            xml: /\bxml\b/,
            html: /\bhtml/,
            json: /\bjson\b/
        },

        responseFields: {
            xml: "responseXML",
            text: "responseText",
            json: "responseJSON"
        },

        // Data converters
        // Keys separate source (or catchall "*") and destination types with a single space
        converters: {

            // Convert anything to text
            "* text": String,

            // Text to html (true = no transformation)
            "text html": true,

            // Evaluate text as a json expression
            "text json": JSON.parse,

            // Parse text as xml
            "text xml": jQuery.parseXML
        },

        // For options that shouldn't be deep extended:
        // you can add your own custom options here if
        // and when you create one that shouldn't be
        // deep extended (see ajaxExtend)
        flatOptions: {
            url: true,
            context: true
        }
    },

    // Creates a full fledged settings object into target
    // with both ajaxSettings and settings fields.
    // If target is omitted, writes into ajaxSettings.
    ajaxSetup: function( target, settings ) {
        return settings ?

            // Building a settings object
            ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

            // Extending ajaxSettings
            ajaxExtend( jQuery.ajaxSettings, target );
    },

    ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
    ajaxTransport: addToPrefiltersOrTransports( transports ),

    // Main method
    ajax: function( url, options ) {

        // If url is an object, simulate pre-1.5 signature
        if ( typeof url === "object" ) {
            options = url;
            url = undefined;
        }

        // Force options to be an object
        options = options || {};

        var transport,

            // URL without anti-cache param
            cacheURL,

            // Response headers
            responseHeadersString,
            responseHeaders,

            // timeout handle
            timeoutTimer,

            // Url cleanup var
            urlAnchor,

            // Request state (becomes false upon send and true upon completion)
            completed,

            // To know if global events are to be dispatched
            fireGlobals,

            // Loop variable
            i,

            // uncached part of the url
            uncached,

            // Create the final options object
            s = jQuery.ajaxSetup( {}, options ),

            // Callbacks context
            callbackContext = s.context || s,

            // Context for global events is callbackContext if it is a DOM node or jQuery collection
            globalEventContext = s.context &&
                ( callbackContext.nodeType || callbackContext.jquery ) ?
                    jQuery( callbackContext ) :
                    jQuery.event,

            // Deferreds
            deferred = jQuery.Deferred(),
            completeDeferred = jQuery.Callbacks( "once memory" ),

            // Status-dependent callbacks
            statusCode = s.statusCode || {},

            // Headers (they are sent all at once)
            requestHeaders = {},
            requestHeadersNames = {},

            // Default abort message
            strAbort = "canceled",

            // Fake xhr
            jqXHR = {
                readyState: 0,

                // Builds headers hashtable if needed
                getResponseHeader: function( key ) {
                    var match;
                    if ( completed ) {
                        if ( !responseHeaders ) {
                            responseHeaders = {};
                            while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
                                responseHeaders[ match[ 1 ].toLowerCase() + " " ] =
                                    ( responseHeaders[ match[ 1 ].toLowerCase() + " " ] || [] )
                                        .concat( match[ 2 ] );
                            }
                        }
                        match = responseHeaders[ key.toLowerCase() + " " ];
                    }
                    return match == null ? null : match.join( ", " );
                },

                // Raw string
                getAllResponseHeaders: function() {
                    return completed ? responseHeadersString : null;
                },

                // Caches the header
                setRequestHeader: function( name, value ) {
                    if ( completed == null ) {
                        name = requestHeadersNames[ name.toLowerCase() ] =
                            requestHeadersNames[ name.toLowerCase() ] || name;
                        requestHeaders[ name ] = value;
                    }
                    return this;
                },

                // Overrides response content-type header
                overrideMimeType: function( type ) {
                    if ( completed == null ) {
                        s.mimeType = type;
                    }
                    return this;
                },

                // Status-dependent callbacks
                statusCode: function( map ) {
                    var code;
                    if ( map ) {
                        if ( completed ) {

                            // Execute the appropriate callbacks
                            jqXHR.always( map[ jqXHR.status ] );
                        } else {

                            // Lazy-add the new callbacks in a way that preserves old ones
                            for ( code in map ) {
                                statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
                            }
                        }
                    }
                    return this;
                },

                // Cancel the request
                abort: function( statusText ) {
                    var finalText = statusText || strAbort;
                    if ( transport ) {
                        transport.abort( finalText );
                    }
                    done( 0, finalText );
                    return this;
                }
            };

        // Attach deferreds
        deferred.promise( jqXHR );

        // Add protocol if not provided (prefilters might expect it)
        // Handle falsy url in the settings object (#10093: consistency with old signature)
        // We also use the url parameter if available
        s.url = ( ( url || s.url || location.href ) + "" )
            .replace( rprotocol, location.protocol + "//" );

        // Alias method option to type as per ticket #12004
        s.type = options.method || options.type || s.method || s.type;

        // Extract dataTypes list
        s.dataTypes = ( s.dataType || "*" ).toLowerCase().match( rnothtmlwhite ) || [ "" ];

        // A cross-domain request is in order when the origin doesn't match the current origin.
        if ( s.crossDomain == null ) {
            urlAnchor = document.createElement( "a" );

            // Support: IE <=8 - 11, Edge 12 - 15
            // IE throws exception on accessing the href property if url is malformed,
            // e.g. http://example.com:80x/
            try {
                urlAnchor.href = s.url;

                // Support: IE <=8 - 11 only
                // Anchor's host property isn't correctly set when s.url is relative
                urlAnchor.href = urlAnchor.href;
                s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
                    urlAnchor.protocol + "//" + urlAnchor.host;
            } catch ( e ) {

                // If there is an error parsing the URL, assume it is crossDomain,
                // it can be rejected by the transport if it is invalid
                s.crossDomain = true;
            }
        }

        // Convert data if not already a string
        if ( s.data && s.processData && typeof s.data !== "string" ) {
            s.data = jQuery.param( s.data, s.traditional );
        }

        // Apply prefilters
        inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

        // If request was aborted inside a prefilter, stop there
        if ( completed ) {
            return jqXHR;
        }

        // We can fire global events as of now if asked to
        // Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
        fireGlobals = jQuery.event && s.global;

        // Watch for a new set of requests
        if ( fireGlobals && jQuery.active++ === 0 ) {
            jQuery.event.trigger( "ajaxStart" );
        }

        // Uppercase the type
        s.type = s.type.toUpperCase();

        // Determine if request has content
        s.hasContent = !rnoContent.test( s.type );

        // Save the URL in case we're toying with the If-Modified-Since
        // and/or If-None-Match header later on
        // Remove hash to simplify url manipulation
        cacheURL = s.url.replace( rhash, "" );

        // More options handling for requests with no content
        if ( !s.hasContent ) {

            // Remember the hash so we can put it back
            uncached = s.url.slice( cacheURL.length );

            // If data is available and should be processed, append data to url
            if ( s.data && ( s.processData || typeof s.data === "string" ) ) {
                cacheURL += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data;

                // #9682: remove data so that it's not used in an eventual retry
                delete s.data;
            }

            // Add or update anti-cache param if needed
            if ( s.cache === false ) {
                cacheURL = cacheURL.replace( rantiCache, "$1" );
                uncached = ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ( nonce.guid++ ) +
                    uncached;
            }

            // Put hash and anti-cache on the URL that will be requested (gh-1732)
            s.url = cacheURL + uncached;

        // Change '%20' to '+' if this is encoded form body content (gh-2658)
        } else if ( s.data && s.processData &&
            ( s.contentType || "" ).indexOf( "application/x-www-form-urlencoded" ) === 0 ) {
            s.data = s.data.replace( r20, "+" );
        }

        // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
        if ( s.ifModified ) {
            if ( jQuery.lastModified[ cacheURL ] ) {
                jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
            }
            if ( jQuery.etag[ cacheURL ] ) {
                jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
            }
        }

        // Set the correct header, if data is being sent
        if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
            jqXHR.setRequestHeader( "Content-Type", s.contentType );
        }

        // Set the Accepts header for the server, depending on the dataType
        jqXHR.setRequestHeader(
            "Accept",
            s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
                s.accepts[ s.dataTypes[ 0 ] ] +
                    ( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
                s.accepts[ "*" ]
        );

        // Check for headers option
        for ( i in s.headers ) {
            jqXHR.setRequestHeader( i, s.headers[ i ] );
        }

        // Allow custom headers/mimetypes and early abort
        if ( s.beforeSend &&
            ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

            // Abort if not done already and return
            return jqXHR.abort();
        }

        // Aborting is no longer a cancellation
        strAbort = "abort";

        // Install callbacks on deferreds
        completeDeferred.add( s.complete );
        jqXHR.done( s.success );
        jqXHR.fail( s.error );

        // Get transport
        transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

        // If no transport, we auto-abort
        if ( !transport ) {
            done( -1, "No Transport" );
        } else {
            jqXHR.readyState = 1;

            // Send global event
            if ( fireGlobals ) {
                globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
            }

            // If request was aborted inside ajaxSend, stop there
            if ( completed ) {
                return jqXHR;
            }

            // Timeout
            if ( s.async && s.timeout > 0 ) {
                timeoutTimer = window.setTimeout( function() {
                    jqXHR.abort( "timeout" );
                }, s.timeout );
            }

            try {
                completed = false;
                transport.send( requestHeaders, done );
            } catch ( e ) {

                // Rethrow post-completion exceptions
                if ( completed ) {
                    throw e;
                }

                // Propagate others as results
                done( -1, e );
            }
        }

        // Callback for when everything is done
        function done( status, nativeStatusText, responses, headers ) {
            var isSuccess, success, error, response, modified,
                statusText = nativeStatusText;

            // Ignore repeat invocations
            if ( completed ) {
                return;
            }

            completed = true;

            // Clear timeout if it exists
            if ( timeoutTimer ) {
                window.clearTimeout( timeoutTimer );
            }

            // Dereference transport for early garbage collection
            // (no matter how long the jqXHR object will be used)
            transport = undefined;

            // Cache response headers
            responseHeadersString = headers || "";

            // Set readyState
            jqXHR.readyState = status > 0 ? 4 : 0;

            // Determine if successful
            isSuccess = status >= 200 && status < 300 || status === 304;

            // Get response data
            if ( responses ) {
                response = ajaxHandleResponses( s, jqXHR, responses );
            }

            // Use a noop converter for missing script
            if ( !isSuccess && jQuery.inArray( "script", s.dataTypes ) > -1 ) {
                s.converters[ "text script" ] = function() {};
            }

            // Convert no matter what (that way responseXXX fields are always set)
            response = ajaxConvert( s, response, jqXHR, isSuccess );

            // If successful, handle type chaining
            if ( isSuccess ) {

                // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
                if ( s.ifModified ) {
                    modified = jqXHR.getResponseHeader( "Last-Modified" );
                    if ( modified ) {
                        jQuery.lastModified[ cacheURL ] = modified;
                    }
                    modified = jqXHR.getResponseHeader( "etag" );
                    if ( modified ) {
                        jQuery.etag[ cacheURL ] = modified;
                    }
                }

                // if no content
                if ( status === 204 || s.type === "HEAD" ) {
                    statusText = "nocontent";

                // if not modified
                } else if ( status === 304 ) {
                    statusText = "notmodified";

                // If we have data, let's convert it
                } else {
                    statusText = response.state;
                    success = response.data;
                    error = response.error;
                    isSuccess = !error;
                }
            } else {

                // Extract error from statusText and normalize for non-aborts
                error = statusText;
                if ( status || !statusText ) {
                    statusText = "error";
                    if ( status < 0 ) {
                        status = 0;
                    }
                }
            }

            // Set data for the fake xhr object
            jqXHR.status = status;
            jqXHR.statusText = ( nativeStatusText || statusText ) + "";

            // Success/Error
            if ( isSuccess ) {
                deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
            } else {
                deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
            }

            // Status-dependent callbacks
            jqXHR.statusCode( statusCode );
            statusCode = undefined;

            if ( fireGlobals ) {
                globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
                    [ jqXHR, s, isSuccess ? success : error ] );
            }

            // Complete
            completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

            if ( fireGlobals ) {
                globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

                // Handle the global AJAX counter
                if ( !( --jQuery.active ) ) {
                    jQuery.event.trigger( "ajaxStop" );
                }
            }
        }

        return jqXHR;
    },

    getJSON: function( url, data, callback ) {
        return jQuery.get( url, data, callback, "json" );
    },

    getScript: function( url, callback ) {
        return jQuery.get( url, undefined, callback, "script" );
    }
} );

jQuery.each( [ "get", "post" ], function( _i, method ) {
    jQuery[ method ] = function( url, data, callback, type ) {

        // Shift arguments if data argument was omitted
        if ( isFunction( data ) ) {
            type = type || callback;
            callback = data;
            data = undefined;
        }

        // The url can be an options object (which then must have .url)
        return jQuery.ajax( jQuery.extend( {
            url: url,
            type: method,
            dataType: type,
            data: data,
            success: callback
        }, jQuery.isPlainObject( url ) && url ) );
    };
} );

jQuery.ajaxPrefilter( function( s ) {
    var i;
    for ( i in s.headers ) {
        if ( i.toLowerCase() === "content-type" ) {
            s.contentType = s.headers[ i ] || "";
        }
    }
} );


jQuery._evalUrl = function( url, options, doc ) {
    return jQuery.ajax( {
        url: url,

        // Make this explicit, since user can override this through ajaxSetup (#11264)
        type: "GET",
        dataType: "script",
        cache: true,
        async: false,
        global: false,

        // Only evaluate the response if it is successful (gh-4126)
        // dataFilter is not invoked for failure responses, so using it instead
        // of the default converter is kludgy but it works.
        converters: {
            "text script": function() {}
        },
        dataFilter: function( response ) {
            jQuery.globalEval( response, options, doc );
        }
    } );
};


jQuery.fn.extend( {
    wrapAll: function( html ) {
        var wrap;

        if ( this[ 0 ] ) {
            if ( isFunction( html ) ) {
                html = html.call( this[ 0 ] );
            }

            // The elements to wrap the target around
            wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

            if ( this[ 0 ].parentNode ) {
                wrap.insertBefore( this[ 0 ] );
            }

            wrap.map( function() {
                var elem = this;

                while ( elem.firstElementChild ) {
                    elem = elem.firstElementChild;
                }

                return elem;
            } ).append( this );
        }

        return this;
    },

    wrapInner: function( html ) {
        if ( isFunction( html ) ) {
            return this.each( function( i ) {
                jQuery( this ).wrapInner( html.call( this, i ) );
            } );
        }

        return this.each( function() {
            var self = jQuery( this ),
                contents = self.contents();

            if ( contents.length ) {
                contents.wrapAll( html );

            } else {
                self.append( html );
            }
        } );
    },

    wrap: function( html ) {
        var htmlIsFunction = isFunction( html );

        return this.each( function( i ) {
            jQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
        } );
    },

    unwrap: function( selector ) {
        this.parent( selector ).not( "body" ).each( function() {
            jQuery( this ).replaceWith( this.childNodes );
        } );
        return this;
    }
} );


jQuery.expr.pseudos.hidden = function( elem ) {
    return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
    return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
    try {
        return new window.XMLHttpRequest();
    } catch ( e ) {}
};

var xhrSuccessStatus = {

        // File protocol always yields status code 0, assume 200
        0: 200,

        // Support: IE <=9 only
        // #1450: sometimes IE returns 1223 when it should be 204
        1223: 204
    },
    xhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
    var callback, errorCallback;

    // Cross domain only allowed if supported through XMLHttpRequest
    if ( support.cors || xhrSupported && !options.crossDomain ) {
        return {
            send: function( headers, complete ) {
                var i,
                    xhr = options.xhr();

                xhr.open(
                    options.type,
                    options.url,
                    options.async,
                    options.username,
                    options.password
                );

                // Apply custom fields if provided
                if ( options.xhrFields ) {
                    for ( i in options.xhrFields ) {
                        xhr[ i ] = options.xhrFields[ i ];
                    }
                }

                // Override mime type if needed
                if ( options.mimeType && xhr.overrideMimeType ) {
                    xhr.overrideMimeType( options.mimeType );
                }

                // X-Requested-With header
                // For cross-domain requests, seeing as conditions for a preflight are
                // akin to a jigsaw puzzle, we simply never set it to be sure.
                // (it can always be set on a per-request basis or even using ajaxSetup)
                // For same-domain requests, won't change header if already provided.
                if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
                    headers[ "X-Requested-With" ] = "XMLHttpRequest";
                }

                // Set headers
                for ( i in headers ) {
                    xhr.setRequestHeader( i, headers[ i ] );
                }

                // Callback
                callback = function( type ) {
                    return function() {
                        if ( callback ) {
                            callback = errorCallback = xhr.onload =
                                xhr.onerror = xhr.onabort = xhr.ontimeout =
                                    xhr.onreadystatechange = null;

                            if ( type === "abort" ) {
                                xhr.abort();
                            } else if ( type === "error" ) {

                                // Support: IE <=9 only
                                // On a manual native abort, IE9 throws
                                // errors on any property access that is not readyState
                                if ( typeof xhr.status !== "number" ) {
                                    complete( 0, "error" );
                                } else {
                                    complete(

                                        // File: protocol always yields status 0; see #8605, #14207
                                        xhr.status,
                                        xhr.statusText
                                    );
                                }
                            } else {
                                complete(
                                    xhrSuccessStatus[ xhr.status ] || xhr.status,
                                    xhr.statusText,

                                    // Support: IE <=9 only
                                    // IE9 has no XHR2 but throws on binary (trac-11426)
                                    // For XHR2 non-text, let the caller handle it (gh-2498)
                                    ( xhr.responseType || "text" ) !== "text"  ||
                                    typeof xhr.responseText !== "string" ?
                                        { binary: xhr.response } :
                                        { text: xhr.responseText },
                                    xhr.getAllResponseHeaders()
                                );
                            }
                        }
                    };
                };

                // Listen to events
                xhr.onload = callback();
                errorCallback = xhr.onerror = xhr.ontimeout = callback( "error" );

                // Support: IE 9 only
                // Use onreadystatechange to replace onabort
                // to handle uncaught aborts
                if ( xhr.onabort !== undefined ) {
                    xhr.onabort = errorCallback;
                } else {
                    xhr.onreadystatechange = function() {

                        // Check readyState before timeout as it changes
                        if ( xhr.readyState === 4 ) {

                            // Allow onerror to be called first,
                            // but that will not handle a native abort
                            // Also, save errorCallback to a variable
                            // as xhr.onerror cannot be accessed
                            window.setTimeout( function() {
                                if ( callback ) {
                                    errorCallback();
                                }
                            } );
                        }
                    };
                }

                // Create the abort callback
                callback = callback( "abort" );

                try {

                    // Do send the request (this may raise an exception)
                    xhr.send( options.hasContent && options.data || null );
                } catch ( e ) {

                    // #14683: Only rethrow if this hasn't been notified as an error yet
                    if ( callback ) {
                        throw e;
                    }
                }
            },

            abort: function() {
                if ( callback ) {
                    callback();
                }
            }
        };
    }
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
    if ( s.crossDomain ) {
        s.contents.script = false;
    }
} );

// Install script dataType
jQuery.ajaxSetup( {
    accepts: {
        script: "text/javascript, application/javascript, " +
            "application/ecmascript, application/x-ecmascript"
    },
    contents: {
        script: /\b(?:java|ecma)script\b/
    },
    converters: {
        "text script": function( text ) {
            jQuery.globalEval( text );
            return text;
        }
    }
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( "script", function( s ) {
    if ( s.cache === undefined ) {
        s.cache = false;
    }
    if ( s.crossDomain ) {
        s.type = "GET";
    }
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

    // This transport only deals with cross domain or forced-by-attrs requests
    if ( s.crossDomain || s.scriptAttrs ) {
        var script, callback;
        return {
            send: function( _, complete ) {
                script = jQuery( "<script>" )
                    .attr( s.scriptAttrs || {} )
                    .prop( { charset: s.scriptCharset, src: s.url } )
                    .on( "load error", callback = function( evt ) {
                        script.remove();
                        callback = null;
                        if ( evt ) {
                            complete( evt.type === "error" ? 404 : 200, evt.type );
                        }
                    } );

                // Use native DOM manipulation to avoid our domManip AJAX trickery
                document.head.appendChild( script[ 0 ] );
            },
            abort: function() {
                if ( callback ) {
                    callback();
                }
            }
        };
    }
} );




var oldCallbacks = [],
    rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
    jsonp: "callback",
    jsonpCallback: function() {
        var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce.guid++ ) );
        this[ callback ] = true;
        return callback;
    }
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

    var callbackName, overwritten, responseContainer,
        jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
            "url" :
            typeof s.data === "string" &&
                ( s.contentType || "" )
                    .indexOf( "application/x-www-form-urlencoded" ) === 0 &&
                rjsonp.test( s.data ) && "data"
        );

    // Handle iff the expected data type is "jsonp" or we have a parameter to set
    if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

        // Get callback name, remembering preexisting value associated with it
        callbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
            s.jsonpCallback() :
            s.jsonpCallback;

        // Insert callback into url or form data
        if ( jsonProp ) {
            s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
        } else if ( s.jsonp !== false ) {
            s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
        }

        // Use data converter to retrieve json after script execution
        s.converters[ "script json" ] = function() {
            if ( !responseContainer ) {
                jQuery.error( callbackName + " was not called" );
            }
            return responseContainer[ 0 ];
        };

        // Force json dataType
        s.dataTypes[ 0 ] = "json";

        // Install callback
        overwritten = window[ callbackName ];
        window[ callbackName ] = function() {
            responseContainer = arguments;
        };

        // Clean-up function (fires after converters)
        jqXHR.always( function() {

            // If previous value didn't exist - remove it
            if ( overwritten === undefined ) {
                jQuery( window ).removeProp( callbackName );

            // Otherwise restore preexisting value
            } else {
                window[ callbackName ] = overwritten;
            }

            // Save back as free
            if ( s[ callbackName ] ) {

                // Make sure that re-using the options doesn't screw things around
                s.jsonpCallback = originalSettings.jsonpCallback;

                // Save the callback name for future use
                oldCallbacks.push( callbackName );
            }

            // Call if it was a function and we have a response
            if ( responseContainer && isFunction( overwritten ) ) {
                overwritten( responseContainer[ 0 ] );
            }

            responseContainer = overwritten = undefined;
        } );

        // Delegate to script
        return "script";
    }
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
    var body = document.implementation.createHTMLDocument( "" ).body;
    body.innerHTML = "<form></form><form></form>";
    return body.childNodes.length === 2;
} )();


// Argument "data" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
    if ( typeof data !== "string" ) {
        return [];
    }
    if ( typeof context === "boolean" ) {
        keepScripts = context;
        context = false;
    }

    var base, parsed, scripts;

    if ( !context ) {

        // Stop scripts or inline event handlers from being executed immediately
        // by using document.implementation
        if ( support.createHTMLDocument ) {
            context = document.implementation.createHTMLDocument( "" );

            // Set the base href for the created document
            // so any parsed elements with URLs
            // are based on the document's URL (gh-2965)
            base = context.createElement( "base" );
            base.href = document.location.href;
            context.head.appendChild( base );
        } else {
            context = document;
        }
    }

    parsed = rsingleTag.exec( data );
    scripts = !keepScripts && [];

    // Single tag
    if ( parsed ) {
        return [ context.createElement( parsed[ 1 ] ) ];
    }

    parsed = buildFragment( [ data ], context, scripts );

    if ( scripts && scripts.length ) {
        jQuery( scripts ).remove();
    }

    return jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
    var selector, type, response,
        self = this,
        off = url.indexOf( " " );

    if ( off > -1 ) {
        selector = stripAndCollapse( url.slice( off ) );
        url = url.slice( 0, off );
    }

    // If it's a function
    if ( isFunction( params ) ) {

        // We assume that it's the callback
        callback = params;
        params = undefined;

    // Otherwise, build a param string
    } else if ( params && typeof params === "object" ) {
        type = "POST";
    }

    // If we have elements to modify, make the request
    if ( self.length > 0 ) {
        jQuery.ajax( {
            url: url,

            // If "type" variable is undefined, then "GET" method will be used.
            // Make value of this field explicit since
            // user can override it through ajaxSetup method
            type: type || "GET",
            dataType: "html",
            data: params
        } ).done( function( responseText ) {

            // Save response for use in complete callback
            response = arguments;

            self.html( selector ?

                // If a selector was specified, locate the right elements in a dummy div
                // Exclude scripts to avoid IE 'Permission Denied' errors
                jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

                // Otherwise use the full result
                responseText );

        // If the request succeeds, this function gets "data", "status", "jqXHR"
        // but they are ignored because response was set above.
        // If it fails, this function gets "jqXHR", "status", "error"
        } ).always( callback && function( jqXHR, status ) {
            self.each( function() {
                callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
            } );
        } );
    }

    return this;
};




jQuery.expr.pseudos.animated = function( elem ) {
    return jQuery.grep( jQuery.timers, function( fn ) {
        return elem === fn.elem;
    } ).length;
};




jQuery.offset = {
    setOffset: function( elem, options, i ) {
        var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
            position = jQuery.css( elem, "position" ),
            curElem = jQuery( elem ),
            props = {};

        // Set position first, in-case top/left are set even on static elem
        if ( position === "static" ) {
            elem.style.position = "relative";
        }

        curOffset = curElem.offset();
        curCSSTop = jQuery.css( elem, "top" );
        curCSSLeft = jQuery.css( elem, "left" );
        calculatePosition = ( position === "absolute" || position === "fixed" ) &&
            ( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

        // Need to be able to calculate position if either
        // top or left is auto and position is either absolute or fixed
        if ( calculatePosition ) {
            curPosition = curElem.position();
            curTop = curPosition.top;
            curLeft = curPosition.left;

        } else {
            curTop = parseFloat( curCSSTop ) || 0;
            curLeft = parseFloat( curCSSLeft ) || 0;
        }

        if ( isFunction( options ) ) {

            // Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
            options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
        }

        if ( options.top != null ) {
            props.top = ( options.top - curOffset.top ) + curTop;
        }
        if ( options.left != null ) {
            props.left = ( options.left - curOffset.left ) + curLeft;
        }

        if ( "using" in options ) {
            options.using.call( elem, props );

        } else {
            if ( typeof props.top === "number" ) {
                props.top += "px";
            }
            if ( typeof props.left === "number" ) {
                props.left += "px";
            }
            curElem.css( props );
        }
    }
};

jQuery.fn.extend( {

    // offset() relates an element's border box to the document origin
    offset: function( options ) {

        // Preserve chaining for setter
        if ( arguments.length ) {
            return options === undefined ?
                this :
                this.each( function( i ) {
                    jQuery.offset.setOffset( this, options, i );
                } );
        }

        var rect, win,
            elem = this[ 0 ];

        if ( !elem ) {
            return;
        }

        // Return zeros for disconnected and hidden (display: none) elements (gh-2310)
        // Support: IE <=11 only
        // Running getBoundingClientRect on a
        // disconnected node in IE throws an error
        if ( !elem.getClientRects().length ) {
            return { top: 0, left: 0 };
        }

        // Get document-relative position by adding viewport scroll to viewport-relative gBCR
        rect = elem.getBoundingClientRect();
        win = elem.ownerDocument.defaultView;
        return {
            top: rect.top + win.pageYOffset,
            left: rect.left + win.pageXOffset
        };
    },

    // position() relates an element's margin box to its offset parent's padding box
    // This corresponds to the behavior of CSS absolute positioning
    position: function() {
        if ( !this[ 0 ] ) {
            return;
        }

        var offsetParent, offset, doc,
            elem = this[ 0 ],
            parentOffset = { top: 0, left: 0 };

        // position:fixed elements are offset from the viewport, which itself always has zero offset
        if ( jQuery.css( elem, "position" ) === "fixed" ) {

            // Assume position:fixed implies availability of getBoundingClientRect
            offset = elem.getBoundingClientRect();

        } else {
            offset = this.offset();

            // Account for the *real* offset parent, which can be the document or its root element
            // when a statically positioned element is identified
            doc = elem.ownerDocument;
            offsetParent = elem.offsetParent || doc.documentElement;
            while ( offsetParent &&
                ( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
                jQuery.css( offsetParent, "position" ) === "static" ) {

                offsetParent = offsetParent.parentNode;
            }
            if ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

                // Incorporate borders into its offset, since they are outside its content origin
                parentOffset = jQuery( offsetParent ).offset();
                parentOffset.top += jQuery.css( offsetParent, "borderTopWidth", true );
                parentOffset.left += jQuery.css( offsetParent, "borderLeftWidth", true );
            }
        }

        // Subtract parent offsets and element margins
        return {
            top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
            left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
        };
    },

    // This method will return documentElement in the following cases:
    // 1) For the element inside the iframe without offsetParent, this method will return
    //    documentElement of the parent window
    // 2) For the hidden or detached element
    // 3) For body or html element, i.e. in case of the html node - it will return itself
    //
    // but those exceptions were never presented as a real life use-cases
    // and might be considered as more preferable results.
    //
    // This logic, however, is not guaranteed and can change at any point in the future
    offsetParent: function() {
        return this.map( function() {
            var offsetParent = this.offsetParent;

            while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
                offsetParent = offsetParent.offsetParent;
            }

            return offsetParent || documentElement;
        } );
    }
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
    var top = "pageYOffset" === prop;

    jQuery.fn[ method ] = function( val ) {
        return access( this, function( elem, method, val ) {

            // Coalesce documents and windows
            var win;
            if ( isWindow( elem ) ) {
                win = elem;
            } else if ( elem.nodeType === 9 ) {
                win = elem.defaultView;
            }

            if ( val === undefined ) {
                return win ? win[ prop ] : elem[ method ];
            }

            if ( win ) {
                win.scrollTo(
                    !top ? val : win.pageXOffset,
                    top ? val : win.pageYOffset
                );

            } else {
                elem[ method ] = val;
            }
        }, method, val, arguments.length );
    };
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ "top", "left" ], function( _i, prop ) {
    jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
        function( elem, computed ) {
            if ( computed ) {
                computed = curCSS( elem, prop );

                // If curCSS returns percentage, fallback to offset
                return rnumnonpx.test( computed ) ?
                    jQuery( elem ).position()[ prop ] + "px" :
                    computed;
            }
        }
    );
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
    jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
        function( defaultExtra, funcName ) {

        // Margin is only for outerHeight, outerWidth
        jQuery.fn[ funcName ] = function( margin, value ) {
            var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
                extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

            return access( this, function( elem, type, value ) {
                var doc;

                if ( isWindow( elem ) ) {

                    // $( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
                    return funcName.indexOf( "outer" ) === 0 ?
                        elem[ "inner" + name ] :
                        elem.document.documentElement[ "client" + name ];
                }

                // Get document width or height
                if ( elem.nodeType === 9 ) {
                    doc = elem.documentElement;

                    // Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
                    // whichever is greatest
                    return Math.max(
                        elem.body[ "scroll" + name ], doc[ "scroll" + name ],
                        elem.body[ "offset" + name ], doc[ "offset" + name ],
                        doc[ "client" + name ]
                    );
                }

                return value === undefined ?

                    // Get width or height on the element, requesting but not forcing parseFloat
                    jQuery.css( elem, type, extra ) :

                    // Set width or height on the element
                    jQuery.style( elem, type, value, extra );
            }, type, chainable ? margin : undefined, chainable );
        };
    } );
} );


jQuery.each( [
    "ajaxStart",
    "ajaxStop",
    "ajaxComplete",
    "ajaxError",
    "ajaxSuccess",
    "ajaxSend"
], function( _i, type ) {
    jQuery.fn[ type ] = function( fn ) {
        return this.on( type, fn );
    };
} );




jQuery.fn.extend( {

    bind: function( types, data, fn ) {
        return this.on( types, null, data, fn );
    },
    unbind: function( types, fn ) {
        return this.off( types, null, fn );
    },

    delegate: function( selector, types, data, fn ) {
        return this.on( types, selector, data, fn );
    },
    undelegate: function( selector, types, fn ) {

        // ( namespace ) or ( selector, types [, fn] )
        return arguments.length === 1 ?
            this.off( selector, "**" ) :
            this.off( types, selector || "**", fn );
    },

    hover: function( fnOver, fnOut ) {
        return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
    }
} );

jQuery.each( ( "blur focus focusin focusout resize scroll click dblclick " +
    "mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
    "change select submit keydown keypress keyup contextmenu" ).split( " " ),
    function( _i, name ) {

        // Handle event binding
        jQuery.fn[ name ] = function( data, fn ) {
            return arguments.length > 0 ?
                this.on( name, null, data, fn ) :
                this.trigger( name );
        };
    } );




// Support: Android <=4.0 only
// Make sure we trim BOM and NBSP
var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
    var tmp, args, proxy;

    if ( typeof context === "string" ) {
        tmp = fn[ context ];
        context = fn;
        fn = tmp;
    }

    // Quick check to determine if target is callable, in the spec
    // this throws a TypeError, but we will just return undefined.
    if ( !isFunction( fn ) ) {
        return undefined;
    }

    // Simulated bind
    args = slice.call( arguments, 2 );
    proxy = function() {
        return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
    };

    // Set the guid of unique handler to the same of original handler, so it can be removed
    proxy.guid = fn.guid = fn.guid || jQuery.guid++;

    return proxy;
};

jQuery.holdReady = function( hold ) {
    if ( hold ) {
        jQuery.readyWait++;
    } else {
        jQuery.ready( true );
    }
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

    // As of jQuery 3.0, isNumeric is limited to
    // strings and numbers (primitives or objects)
    // that can be coerced to finite numbers (gh-2662)
    var type = jQuery.type( obj );
    return ( type === "number" || type === "string" ) &&

        // parseFloat NaNs numeric-cast false positives ("")
        // ...but misinterprets leading-number strings, particularly hex literals ("0x...")
        // subtraction forces infinities to NaN
        !isNaN( obj - parseFloat( obj ) );
};

jQuery.trim = function( text ) {
    return text == null ?
        "" :
        ( text + "" ).replace( rtrim, "" );
};



// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === "function" && define.amd ) {
    define( "jquery", [], function() {
        return jQuery;
    } );
}




var

    // Map over jQuery in case of overwrite
    _jQuery = window.jQuery,

    // Map over the $ in case of overwrite
    _$ = window.$;

jQuery.noConflict = function( deep ) {
    if ( window.$ === jQuery ) {
        window.$ = _$;
    }

    if ( deep && window.jQuery === jQuery ) {
        window.jQuery = _jQuery;
    }

    return jQuery;
};

// Expose jQuery and $ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === "undefined" ) {
    window.jQuery = window.$ = jQuery;
}




return jQuery;
} );
</script>
<script>
    /*!
   Copyright 2008-2021 SpryMedia Ltd.

 This source file is free software, available under the following license:
   MIT license - http://datatables.net/license

 This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.

 For details please refer to: http://www.datatables.net
 DataTables 1.10.24
 ©2008-2021 SpryMedia Ltd - datatables.net/license
*/
var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.findInternal = function(k, y, z) {
    k instanceof String && (k = String(k));
    for (var q = k.length, G = 0; G < q; G++) {
        var O = k[G];
        if (y.call(z, O, G, k)) return {
            i: G,
            v: O
        }
    }
    return {
        i: -1,
        v: void 0
    }
};
$jscomp.ASSUME_ES5 = !1;
$jscomp.ASSUME_NO_NATIVE_MAP = !1;
$jscomp.ASSUME_NO_NATIVE_SET = !1;
$jscomp.SIMPLE_FROUND_POLYFILL = !1;
$jscomp.ISOLATE_POLYFILLS = !1;
$jscomp.defineProperty = $jscomp.ASSUME_ES5 || "function" == typeof Object.defineProperties ? Object.defineProperty : function(k, y, z) {
    if (k == Array.prototype || k == Object.prototype) return k;
    k[y] = z.value;
    return k
};
$jscomp.getGlobal = function(k) {
    k = ["object" == typeof globalThis && globalThis, k, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global];
    for (var y = 0; y < k.length; ++y) {
        var z = k[y];
        if (z && z.Math == Math) return z
    }
    throw Error("Cannot find global object");
};
$jscomp.global = $jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE = "function" === typeof Symbol && "symbol" === typeof Symbol("x");
$jscomp.TRUST_ES6_POLYFILLS = !$jscomp.ISOLATE_POLYFILLS || $jscomp.IS_SYMBOL_NATIVE;
$jscomp.polyfills = {};
$jscomp.propertyToPolyfillSymbol = {};
$jscomp.POLYFILL_PREFIX = "$jscp$";
var $jscomp$lookupPolyfilledValue = function(k, y) {
    var z = $jscomp.propertyToPolyfillSymbol[y];
    if (null == z) return k[y];
    z = k[z];
    return void 0 !== z ? z : k[y]
};
$jscomp.polyfill = function(k, y, z, q) {
    y && ($jscomp.ISOLATE_POLYFILLS ? $jscomp.polyfillIsolated(k, y, z, q) : $jscomp.polyfillUnisolated(k, y, z, q))
};
$jscomp.polyfillUnisolated = function(k, y, z, q) {
    z = $jscomp.global;
    k = k.split(".");
    for (q = 0; q < k.length - 1; q++) {
        var G = k[q];
        if (!(G in z)) return;
        z = z[G]
    }
    k = k[k.length - 1];
    q = z[k];
    y = y(q);
    y != q && null != y && $jscomp.defineProperty(z, k, {
        configurable: !0,
        writable: !0,
        value: y
    })
};
$jscomp.polyfillIsolated = function(k, y, z, q) {
    var G = k.split(".");
    k = 1 === G.length;
    q = G[0];
    q = !k && q in $jscomp.polyfills ? $jscomp.polyfills : $jscomp.global;
    for (var O = 0; O < G.length - 1; O++) {
        var ma = G[O];
        if (!(ma in q)) return;
        q = q[ma]
    }
    G = G[G.length - 1];
    z = $jscomp.IS_SYMBOL_NATIVE && "es6" === z ? q[G] : null;
    y = y(z);
    null != y && (k ? $jscomp.defineProperty($jscomp.polyfills, G, {
        configurable: !0,
        writable: !0,
        value: y
    }) : y !== z && ($jscomp.propertyToPolyfillSymbol[G] = $jscomp.IS_SYMBOL_NATIVE ? $jscomp.global.Symbol(G) : $jscomp.POLYFILL_PREFIX + G,
        G = $jscomp.propertyToPolyfillSymbol[G], $jscomp.defineProperty(q, G, {
            configurable: !0,
            writable: !0,
            value: y
        })))
};
$jscomp.polyfill("Array.prototype.find", function(k) {
    return k ? k : function(y, z) {
        return $jscomp.findInternal(this, y, z).v
    }
}, "es6", "es3");
(function(k) {
    "function" === typeof define && define.amd ? define(["jquery"], function(y) {
        return k(y, window, document)
    }) : "object" === typeof exports ? module.exports = function(y, z) {
        y || (y = window);
        z || (z = "undefined" !== typeof window ? require("jquery") : require("jquery")(y));
        return k(z, y, y.document)
    } : k(jQuery, window, document)
})(function(k, y, z, q) {
    function G(a) {
        var b, c, d = {};
        k.each(a, function(e, f) {
            (b = e.match(/^([^A-Z]+?)([A-Z])/)) && -1 !== "a aa ai ao as b fn i m o s ".indexOf(b[1] + " ") && (c = e.replace(b[0], b[2].toLowerCase()),
                d[c] = e, "o" === b[1] && G(a[e]))
        });
        a._hungarianMap = d
    }

    function O(a, b, c) {
        a._hungarianMap || G(a);
        var d;
        k.each(b, function(e, f) {
            d = a._hungarianMap[e];
            d === q || !c && b[d] !== q || ("o" === d.charAt(0) ? (b[d] || (b[d] = {}), k.extend(!0, b[d], b[e]), O(a[d], b[d], c)) : b[d] = b[e])
        })
    }

    function ma(a) {
        var b = u.defaults.oLanguage,
            c = b.sDecimal;
        c && Va(c);
        if (a) {
            var d = a.sZeroRecords;
            !a.sEmptyTable && d && "No data available in table" === b.sEmptyTable && V(a, a, "sZeroRecords", "sEmptyTable");
            !a.sLoadingRecords && d && "Loading..." === b.sLoadingRecords && V(a, a,
                "sZeroRecords", "sLoadingRecords");
            a.sInfoThousands && (a.sThousands = a.sInfoThousands);
            (a = a.sDecimal) && c !== a && Va(a)
        }
    }

    function yb(a) {
        R(a, "ordering", "bSort");
        R(a, "orderMulti", "bSortMulti");
        R(a, "orderClasses", "bSortClasses");
        R(a, "orderCellsTop", "bSortCellsTop");
        R(a, "order", "aaSorting");
        R(a, "orderFixed", "aaSortingFixed");
        R(a, "paging", "bPaginate");
        R(a, "pagingType", "sPaginationType");
        R(a, "pageLength", "iDisplayLength");
        R(a, "searching", "bFilter");
        "boolean" === typeof a.sScrollX && (a.sScrollX = a.sScrollX ? "100%" :
            "");
        "boolean" === typeof a.scrollX && (a.scrollX = a.scrollX ? "100%" : "");
        if (a = a.aoSearchCols)
            for (var b = 0, c = a.length; b < c; b++) a[b] && O(u.models.oSearch, a[b])
    }

    function zb(a) {
        R(a, "orderable", "bSortable");
        R(a, "orderData", "aDataSort");
        R(a, "orderSequence", "asSorting");
        R(a, "orderDataType", "sortDataType");
        var b = a.aDataSort;
        "number" !== typeof b || Array.isArray(b) || (a.aDataSort = [b])
    }

    function Ab(a) {
        if (!u.__browser) {
            var b = {};
            u.__browser = b;
            var c = k("<div/>").css({
                    position: "fixed",
                    top: 0,
                    left: -1 * k(y).scrollLeft(),
                    height: 1,
                    width: 1,
                    overflow: "hidden"
                }).append(k("<div/>").css({
                    position: "absolute",
                    top: 1,
                    left: 1,
                    width: 100,
                    overflow: "scroll"
                }).append(k("<div/>").css({
                    width: "100%",
                    height: 10
                }))).appendTo("body"),
                d = c.children(),
                e = d.children();
            b.barWidth = d[0].offsetWidth - d[0].clientWidth;
            b.bScrollOversize = 100 === e[0].offsetWidth && 100 !== d[0].clientWidth;
            b.bScrollbarLeft = 1 !== Math.round(e.offset().left);
            b.bBounding = c[0].getBoundingClientRect().width ? !0 : !1;
            c.remove()
        }
        k.extend(a.oBrowser, u.__browser);
        a.oScroll.iBarWidth = u.__browser.barWidth
    }

    function Bb(a, b, c, d, e, f) {
        var g = !1;
        if (c !== q) {
            var h = c;
            g = !0
        }
        for (; d !== e;) a.hasOwnProperty(d) && (h = g ? b(h, a[d], d, a) : a[d], g = !0, d += f);
        return h
    }

    function Wa(a, b) {
        var c = u.defaults.column,
            d = a.aoColumns.length;
        c = k.extend({}, u.models.oColumn, c, {
            nTh: b ? b : z.createElement("th"),
            sTitle: c.sTitle ? c.sTitle : b ? b.innerHTML : "",
            aDataSort: c.aDataSort ? c.aDataSort : [d],
            mData: c.mData ? c.mData : d,
            idx: d
        });
        a.aoColumns.push(c);
        c = a.aoPreSearchCols;
        c[d] = k.extend({}, u.models.oSearch, c[d]);
        Da(a, d, k(b).data())
    }

    function Da(a, b, c) {
        b = a.aoColumns[b];
        var d = a.oClasses,
            e = k(b.nTh);
        if (!b.sWidthOrig) {
            b.sWidthOrig = e.attr("width") || null;
            var f = (e.attr("style") || "").match(/width:\s*(\d+[pxem%]+)/);
            f && (b.sWidthOrig = f[1])
        }
        c !== q && null !== c && (zb(c), O(u.defaults.column, c, !0), c.mDataProp === q || c.mData || (c.mData = c.mDataProp), c.sType && (b._sManualType = c.sType), c.className && !c.sClass && (c.sClass = c.className), c.sClass && e.addClass(c.sClass), k.extend(b, c), V(b, c, "sWidth", "sWidthOrig"), c.iDataSort !== q && (b.aDataSort = [c.iDataSort]), V(b, c, "aDataSort"));
        var g = b.mData,
            h = ia(g),
            l = b.mRender ? ia(b.mRender) : null;
        c = function(n) {
            return "string" === typeof n && -1 !== n.indexOf("@")
        };
        b._bAttrSrc = k.isPlainObject(g) && (c(g.sort) || c(g.type) || c(g.filter));
        b._setter = null;
        b.fnGetData = function(n, m, p) {
            var t = h(n, m, q, p);
            return l && m ? l(t, m, n, p) : t
        };
        b.fnSetData = function(n, m, p) {
            return da(g)(n, m, p)
        };
        "number" !== typeof g && (a._rowReadObject = !0);
        a.oFeatures.bSort || (b.bSortable = !1, e.addClass(d.sSortableNone));
        a = -1 !== k.inArray("asc", b.asSorting);
        c = -1 !== k.inArray("desc", b.asSorting);
        b.bSortable && (a || c) ? a && !c ?
            (b.sSortingClass = d.sSortableAsc, b.sSortingClassJUI = d.sSortJUIAscAllowed) : !a && c ? (b.sSortingClass = d.sSortableDesc, b.sSortingClassJUI = d.sSortJUIDescAllowed) : (b.sSortingClass = d.sSortable, b.sSortingClassJUI = d.sSortJUI) : (b.sSortingClass = d.sSortableNone, b.sSortingClassJUI = "")
    }

    function ra(a) {
        if (!1 !== a.oFeatures.bAutoWidth) {
            var b = a.aoColumns;
            Xa(a);
            for (var c = 0, d = b.length; c < d; c++) b[c].nTh.style.width = b[c].sWidth
        }
        b = a.oScroll;
        "" === b.sY && "" === b.sX || Ea(a);
        H(a, null, "column-sizing", [a])
    }

    function sa(a, b) {
        a = Fa(a, "bVisible");
        return "number" === typeof a[b] ? a[b] : null
    }

    function ta(a, b) {
        a = Fa(a, "bVisible");
        b = k.inArray(b, a);
        return -1 !== b ? b : null
    }

    function na(a) {
        var b = 0;
        k.each(a.aoColumns, function(c, d) {
            d.bVisible && "none" !== k(d.nTh).css("display") && b++
        });
        return b
    }

    function Fa(a, b) {
        var c = [];
        k.map(a.aoColumns, function(d, e) {
            d[b] && c.push(e)
        });
        return c
    }

    function Ya(a) {
        var b = a.aoColumns,
            c = a.aoData,
            d = u.ext.type.detect,
            e, f, g;
        var h = 0;
        for (e = b.length; h < e; h++) {
            var l = b[h];
            var n = [];
            if (!l.sType && l._sManualType) l.sType = l._sManualType;
            else if (!l.sType) {
                var m =
                    0;
                for (f = d.length; m < f; m++) {
                    var p = 0;
                    for (g = c.length; p < g; p++) {
                        n[p] === q && (n[p] = S(a, p, h, "type"));
                        var t = d[m](n[p], a);
                        if (!t && m !== d.length - 1) break;
                        if ("html" === t) break
                    }
                    if (t) {
                        l.sType = t;
                        break
                    }
                }
                l.sType || (l.sType = "string")
            }
        }
    }

    function Cb(a, b, c, d) {
        var e, f, g, h = a.aoColumns;
        if (b)
            for (e = b.length - 1; 0 <= e; e--) {
                var l = b[e];
                var n = l.targets !== q ? l.targets : l.aTargets;
                Array.isArray(n) || (n = [n]);
                var m = 0;
                for (f = n.length; m < f; m++)
                    if ("number" === typeof n[m] && 0 <= n[m]) {
                        for (; h.length <= n[m];) Wa(a);
                        d(n[m], l)
                    } else if ("number" === typeof n[m] &&
                    0 > n[m]) d(h.length + n[m], l);
                else if ("string" === typeof n[m]) {
                    var p = 0;
                    for (g = h.length; p < g; p++)("_all" == n[m] || k(h[p].nTh).hasClass(n[m])) && d(p, l)
                }
            }
        if (c)
            for (e = 0, a = c.length; e < a; e++) d(e, c[e])
    }

    function ea(a, b, c, d) {
        var e = a.aoData.length,
            f = k.extend(!0, {}, u.models.oRow, {
                src: c ? "dom" : "data",
                idx: e
            });
        f._aData = b;
        a.aoData.push(f);
        for (var g = a.aoColumns, h = 0, l = g.length; h < l; h++) g[h].sType = null;
        a.aiDisplayMaster.push(e);
        b = a.rowIdFn(b);
        b !== q && (a.aIds[b] = f);
        !c && a.oFeatures.bDeferRender || Za(a, e, c, d);
        return e
    }

    function Ga(a,
        b) {
        var c;
        b instanceof k || (b = k(b));
        return b.map(function(d, e) {
            c = $a(a, e);
            return ea(a, c.data, e, c.cells)
        })
    }

    function S(a, b, c, d) {
        var e = a.iDraw,
            f = a.aoColumns[c],
            g = a.aoData[b]._aData,
            h = f.sDefaultContent,
            l = f.fnGetData(g, d, {
                settings: a,
                row: b,
                col: c
            });
        if (l === q) return a.iDrawError != e && null === h && (aa(a, 0, "Requested unknown parameter " + ("function" == typeof f.mData ? "{function}" : "'" + f.mData + "'") + " for row " + b + ", column " + c, 4), a.iDrawError = e), h;
        if ((l === g || null === l) && null !== h && d !== q) l = h;
        else if ("function" === typeof l) return l.call(g);
        return null === l && "display" == d ? "" : l
    }

    function Db(a, b, c, d) {
        a.aoColumns[c].fnSetData(a.aoData[b]._aData, d, {
            settings: a,
            row: b,
            col: c
        })
    }

    function ab(a) {
        return k.map(a.match(/(\\.|[^\.])+/g) || [""], function(b) {
            return b.replace(/\\\./g, ".")
        })
    }

    function ia(a) {
        if (k.isPlainObject(a)) {
            var b = {};
            k.each(a, function(d, e) {
                e && (b[d] = ia(e))
            });
            return function(d, e, f, g) {
                var h = b[e] || b._;
                return h !== q ? h(d, e, f, g) : d
            }
        }
        if (null === a) return function(d) {
            return d
        };
        if ("function" === typeof a) return function(d, e, f, g) {
            return a(d, e, f, g)
        };
        if ("string" !==
            typeof a || -1 === a.indexOf(".") && -1 === a.indexOf("[") && -1 === a.indexOf("(")) return function(d, e) {
            return d[a]
        };
        var c = function(d, e, f) {
            if ("" !== f) {
                var g = ab(f);
                for (var h = 0, l = g.length; h < l; h++) {
                    f = g[h].match(ua);
                    var n = g[h].match(oa);
                    if (f) {
                        g[h] = g[h].replace(ua, "");
                        "" !== g[h] && (d = d[g[h]]);
                        n = [];
                        g.splice(0, h + 1);
                        g = g.join(".");
                        if (Array.isArray(d))
                            for (h = 0, l = d.length; h < l; h++) n.push(c(d[h], e, g));
                        d = f[0].substring(1, f[0].length - 1);
                        d = "" === d ? n : n.join(d);
                        break
                    } else if (n) {
                        g[h] = g[h].replace(oa, "");
                        d = d[g[h]]();
                        continue
                    }
                    if (null ===
                        d || d[g[h]] === q) return q;
                    d = d[g[h]]
                }
            }
            return d
        };
        return function(d, e) {
            return c(d, e, a)
        }
    }

    function da(a) {
        if (k.isPlainObject(a)) return da(a._);
        if (null === a) return function() {};
        if ("function" === typeof a) return function(c, d, e) {
            a(c, "set", d, e)
        };
        if ("string" !== typeof a || -1 === a.indexOf(".") && -1 === a.indexOf("[") && -1 === a.indexOf("(")) return function(c, d) {
            c[a] = d
        };
        var b = function(c, d, e) {
            e = ab(e);
            var f = e[e.length - 1];
            for (var g, h, l = 0, n = e.length - 1; l < n; l++) {
                if ("__proto__" === e[l] || "constructor" === e[l]) throw Error("Cannot set prototype values");
                g = e[l].match(ua);
                h = e[l].match(oa);
                if (g) {
                    e[l] = e[l].replace(ua, "");
                    c[e[l]] = [];
                    f = e.slice();
                    f.splice(0, l + 1);
                    g = f.join(".");
                    if (Array.isArray(d))
                        for (h = 0, n = d.length; h < n; h++) f = {}, b(f, d[h], g), c[e[l]].push(f);
                    else c[e[l]] = d;
                    return
                }
                h && (e[l] = e[l].replace(oa, ""), c = c[e[l]](d));
                if (null === c[e[l]] || c[e[l]] === q) c[e[l]] = {};
                c = c[e[l]]
            }
            if (f.match(oa)) c[f.replace(oa, "")](d);
            else c[f.replace(ua, "")] = d
        };
        return function(c, d) {
            return b(c, d, a)
        }
    }

    function bb(a) {
        return T(a.aoData, "_aData")
    }

    function Ha(a) {
        a.aoData.length = 0;
        a.aiDisplayMaster.length =
            0;
        a.aiDisplay.length = 0;
        a.aIds = {}
    }

    function Ia(a, b, c) {
        for (var d = -1, e = 0, f = a.length; e < f; e++) a[e] == b ? d = e : a[e] > b && a[e]--; - 1 != d && c === q && a.splice(d, 1)
    }

    function va(a, b, c, d) {
        var e = a.aoData[b],
            f, g = function(l, n) {
                for (; l.childNodes.length;) l.removeChild(l.firstChild);
                l.innerHTML = S(a, b, n, "display")
            };
        if ("dom" !== c && (c && "auto" !== c || "dom" !== e.src)) {
            var h = e.anCells;
            if (h)
                if (d !== q) g(h[d], d);
                else
                    for (c = 0, f = h.length; c < f; c++) g(h[c], c)
        } else e._aData = $a(a, e, d, d === q ? q : e._aData).data;
        e._aSortData = null;
        e._aFilterData = null;
        g =
            a.aoColumns;
        if (d !== q) g[d].sType = null;
        else {
            c = 0;
            for (f = g.length; c < f; c++) g[c].sType = null;
            cb(a, e)
        }
    }

    function $a(a, b, c, d) {
        var e = [],
            f = b.firstChild,
            g, h = 0,
            l, n = a.aoColumns,
            m = a._rowReadObject;
        d = d !== q ? d : m ? {} : [];
        var p = function(x, r) {
                if ("string" === typeof x) {
                    var A = x.indexOf("@"); - 1 !== A && (A = x.substring(A + 1), da(x)(d, r.getAttribute(A)))
                }
            },
            t = function(x) {
                if (c === q || c === h) g = n[h], l = x.innerHTML.trim(), g && g._bAttrSrc ? (da(g.mData._)(d, l), p(g.mData.sort, x), p(g.mData.type, x), p(g.mData.filter, x)) : m ? (g._setter || (g._setter = da(g.mData)),
                    g._setter(d, l)) : d[h] = l;
                h++
            };
        if (f)
            for (; f;) {
                var v = f.nodeName.toUpperCase();
                if ("TD" == v || "TH" == v) t(f), e.push(f);
                f = f.nextSibling
            } else
                for (e = b.anCells, f = 0, v = e.length; f < v; f++) t(e[f]);
        (b = b.firstChild ? b : b.nTr) && (b = b.getAttribute("id")) && da(a.rowId)(d, b);
        return {
            data: d,
            cells: e
        }
    }

    function Za(a, b, c, d) {
        var e = a.aoData[b],
            f = e._aData,
            g = [],
            h, l;
        if (null === e.nTr) {
            var n = c || z.createElement("tr");
            e.nTr = n;
            e.anCells = g;
            n._DT_RowIndex = b;
            cb(a, e);
            var m = 0;
            for (h = a.aoColumns.length; m < h; m++) {
                var p = a.aoColumns[m];
                e = (l = c ? !1 : !0) ? z.createElement(p.sCellType) :
                    d[m];
                e._DT_CellIndex = {
                    row: b,
                    column: m
                };
                g.push(e);
                if (l || !(!p.mRender && p.mData === m || k.isPlainObject(p.mData) && p.mData._ === m + ".display")) e.innerHTML = S(a, b, m, "display");
                p.sClass && (e.className += " " + p.sClass);
                p.bVisible && !c ? n.appendChild(e) : !p.bVisible && c && e.parentNode.removeChild(e);
                p.fnCreatedCell && p.fnCreatedCell.call(a.oInstance, e, S(a, b, m), f, b, m)
            }
            H(a, "aoRowCreatedCallback", null, [n, f, b, g])
        }
    }

    function cb(a, b) {
        var c = b.nTr,
            d = b._aData;
        if (c) {
            if (a = a.rowIdFn(d)) c.id = a;
            d.DT_RowClass && (a = d.DT_RowClass.split(" "),
                b.__rowc = b.__rowc ? Ja(b.__rowc.concat(a)) : a, k(c).removeClass(b.__rowc.join(" ")).addClass(d.DT_RowClass));
            d.DT_RowAttr && k(c).attr(d.DT_RowAttr);
            d.DT_RowData && k(c).data(d.DT_RowData)
        }
    }

    function Eb(a) {
        var b, c, d = a.nTHead,
            e = a.nTFoot,
            f = 0 === k("th, td", d).length,
            g = a.oClasses,
            h = a.aoColumns;
        f && (c = k("<tr/>").appendTo(d));
        var l = 0;
        for (b = h.length; l < b; l++) {
            var n = h[l];
            var m = k(n.nTh).addClass(n.sClass);
            f && m.appendTo(c);
            a.oFeatures.bSort && (m.addClass(n.sSortingClass), !1 !== n.bSortable && (m.attr("tabindex", a.iTabIndex).attr("aria-controls",
                a.sTableId), db(a, n.nTh, l)));
            n.sTitle != m[0].innerHTML && m.html(n.sTitle);
            eb(a, "header")(a, m, n, g)
        }
        f && wa(a.aoHeader, d);
        k(d).children("tr").attr("role", "row");
        k(d).children("tr").children("th, td").addClass(g.sHeaderTH);
        k(e).children("tr").children("th, td").addClass(g.sFooterTH);
        if (null !== e)
            for (a = a.aoFooter[0], l = 0, b = a.length; l < b; l++) n = h[l], n.nTf = a[l].cell, n.sClass && k(n.nTf).addClass(n.sClass)
    }

    function xa(a, b, c) {
        var d, e, f = [],
            g = [],
            h = a.aoColumns.length;
        if (b) {
            c === q && (c = !1);
            var l = 0;
            for (d = b.length; l < d; l++) {
                f[l] =
                    b[l].slice();
                f[l].nTr = b[l].nTr;
                for (e = h - 1; 0 <= e; e--) a.aoColumns[e].bVisible || c || f[l].splice(e, 1);
                g.push([])
            }
            l = 0;
            for (d = f.length; l < d; l++) {
                if (a = f[l].nTr)
                    for (; e = a.firstChild;) a.removeChild(e);
                e = 0;
                for (b = f[l].length; e < b; e++) {
                    var n = h = 1;
                    if (g[l][e] === q) {
                        a.appendChild(f[l][e].cell);
                        for (g[l][e] = 1; f[l + h] !== q && f[l][e].cell == f[l + h][e].cell;) g[l + h][e] = 1, h++;
                        for (; f[l][e + n] !== q && f[l][e].cell == f[l][e + n].cell;) {
                            for (c = 0; c < h; c++) g[l + c][e + n] = 1;
                            n++
                        }
                        k(f[l][e].cell).attr("rowspan", h).attr("colspan", n)
                    }
                }
            }
        }
    }

    function fa(a) {
        var b =
            H(a, "aoPreDrawCallback", "preDraw", [a]);
        if (-1 !== k.inArray(!1, b)) U(a, !1);
        else {
            b = [];
            var c = 0,
                d = a.asStripeClasses,
                e = d.length,
                f = a.oLanguage,
                g = a.iInitDisplayStart,
                h = "ssp" == P(a),
                l = a.aiDisplay;
            a.bDrawing = !0;
            g !== q && -1 !== g && (a._iDisplayStart = h ? g : g >= a.fnRecordsDisplay() ? 0 : g, a.iInitDisplayStart = -1);
            g = a._iDisplayStart;
            var n = a.fnDisplayEnd();
            if (a.bDeferLoading) a.bDeferLoading = !1, a.iDraw++, U(a, !1);
            else if (!h) a.iDraw++;
            else if (!a.bDestroying && !Fb(a)) return;
            if (0 !== l.length)
                for (f = h ? a.aoData.length : n, h = h ? 0 : g; h < f; h++) {
                    var m =
                        l[h],
                        p = a.aoData[m];
                    null === p.nTr && Za(a, m);
                    var t = p.nTr;
                    if (0 !== e) {
                        var v = d[c % e];
                        p._sRowStripe != v && (k(t).removeClass(p._sRowStripe).addClass(v), p._sRowStripe = v)
                    }
                    H(a, "aoRowCallback", null, [t, p._aData, c, h, m]);
                    b.push(t);
                    c++
                } else c = f.sZeroRecords, 1 == a.iDraw && "ajax" == P(a) ? c = f.sLoadingRecords : f.sEmptyTable && 0 === a.fnRecordsTotal() && (c = f.sEmptyTable), b[0] = k("<tr/>", {
                    "class": e ? d[0] : ""
                }).append(k("<td />", {
                    valign: "top",
                    colSpan: na(a),
                    "class": a.oClasses.sRowEmpty
                }).html(c))[0];
            H(a, "aoHeaderCallback", "header", [k(a.nTHead).children("tr")[0],
                bb(a), g, n, l
            ]);
            H(a, "aoFooterCallback", "footer", [k(a.nTFoot).children("tr")[0], bb(a), g, n, l]);
            d = k(a.nTBody);
            d.children().detach();
            d.append(k(b));
            H(a, "aoDrawCallback", "draw", [a]);
            a.bSorted = !1;
            a.bFiltered = !1;
            a.bDrawing = !1
        }
    }

    function ja(a, b) {
        var c = a.oFeatures,
            d = c.bFilter;
        c.bSort && Gb(a);
        d ? ya(a, a.oPreviousSearch) : a.aiDisplay = a.aiDisplayMaster.slice();
        !0 !== b && (a._iDisplayStart = 0);
        a._drawHold = b;
        fa(a);
        a._drawHold = !1
    }

    function Hb(a) {
        var b = a.oClasses,
            c = k(a.nTable);
        c = k("<div/>").insertBefore(c);
        var d = a.oFeatures,
            e = k("<div/>", {
                id: a.sTableId + "_wrapper",
                "class": b.sWrapper + (a.nTFoot ? "" : " " + b.sNoFooter)
            });
        a.nHolding = c[0];
        a.nTableWrapper = e[0];
        a.nTableReinsertBefore = a.nTable.nextSibling;
        for (var f = a.sDom.split(""), g, h, l, n, m, p, t = 0; t < f.length; t++) {
            g = null;
            h = f[t];
            if ("<" == h) {
                l = k("<div/>")[0];
                n = f[t + 1];
                if ("'" == n || '"' == n) {
                    m = "";
                    for (p = 2; f[t + p] != n;) m += f[t + p], p++;
                    "H" == m ? m = b.sJUIHeader : "F" == m && (m = b.sJUIFooter); - 1 != m.indexOf(".") ? (n = m.split("."), l.id = n[0].substr(1, n[0].length - 1), l.className = n[1]) : "#" == m.charAt(0) ? l.id = m.substr(1,
                        m.length - 1) : l.className = m;
                    t += p
                }
                e.append(l);
                e = k(l)
            } else if (">" == h) e = e.parent();
            else if ("l" == h && d.bPaginate && d.bLengthChange) g = Ib(a);
            else if ("f" == h && d.bFilter) g = Jb(a);
            else if ("r" == h && d.bProcessing) g = Kb(a);
            else if ("t" == h) g = Lb(a);
            else if ("i" == h && d.bInfo) g = Mb(a);
            else if ("p" == h && d.bPaginate) g = Nb(a);
            else if (0 !== u.ext.feature.length)
                for (l = u.ext.feature, p = 0, n = l.length; p < n; p++)
                    if (h == l[p].cFeature) {
                        g = l[p].fnInit(a);
                        break
                    } g && (l = a.aanFeatures, l[h] || (l[h] = []), l[h].push(g), e.append(g))
        }
        c.replaceWith(e);
        a.nHolding =
            null
    }

    function wa(a, b) {
        b = k(b).children("tr");
        var c, d, e;
        a.splice(0, a.length);
        var f = 0;
        for (e = b.length; f < e; f++) a.push([]);
        f = 0;
        for (e = b.length; f < e; f++) {
            var g = b[f];
            for (c = g.firstChild; c;) {
                if ("TD" == c.nodeName.toUpperCase() || "TH" == c.nodeName.toUpperCase()) {
                    var h = 1 * c.getAttribute("colspan");
                    var l = 1 * c.getAttribute("rowspan");
                    h = h && 0 !== h && 1 !== h ? h : 1;
                    l = l && 0 !== l && 1 !== l ? l : 1;
                    var n = 0;
                    for (d = a[f]; d[n];) n++;
                    var m = n;
                    var p = 1 === h ? !0 : !1;
                    for (d = 0; d < h; d++)
                        for (n = 0; n < l; n++) a[f + n][m + d] = {
                            cell: c,
                            unique: p
                        }, a[f + n].nTr = g
                }
                c = c.nextSibling
            }
        }
    }

    function Ka(a, b, c) {
        var d = [];
        c || (c = a.aoHeader, b && (c = [], wa(c, b)));
        b = 0;
        for (var e = c.length; b < e; b++)
            for (var f = 0, g = c[b].length; f < g; f++) !c[b][f].unique || d[f] && a.bSortCellsTop || (d[f] = c[b][f].cell);
        return d
    }

    function La(a, b, c) {
        H(a, "aoServerParams", "serverParams", [b]);
        if (b && Array.isArray(b)) {
            var d = {},
                e = /(.*?)\[\]$/;
            k.each(b, function(m, p) {
                (m = p.name.match(e)) ? (m = m[0], d[m] || (d[m] = []), d[m].push(p.value)) : d[p.name] = p.value
            });
            b = d
        }
        var f = a.ajax,
            g = a.oInstance,
            h = function(m) {
                H(a, null, "xhr", [a, m, a.jqXHR]);
                c(m)
            };
        if (k.isPlainObject(f) &&
            f.data) {
            var l = f.data;
            var n = "function" === typeof l ? l(b, a) : l;
            b = "function" === typeof l && n ? n : k.extend(!0, b, n);
            delete f.data
        }
        n = {
            data: b,
            success: function(m) {
                var p = m.error || m.sError;
                p && aa(a, 0, p);
                a.json = m;
                h(m)
            },
            dataType: "json",
            cache: !1,
            type: a.sServerMethod,
            error: function(m, p, t) {
                t = H(a, null, "xhr", [a, null, a.jqXHR]); - 1 === k.inArray(!0, t) && ("parsererror" == p ? aa(a, 0, "Invalid JSON response", 1) : 4 === m.readyState && aa(a, 0, "Ajax error", 7));
                U(a, !1)
            }
        };
        a.oAjaxData = b;
        H(a, null, "preXhr", [a, b]);
        a.fnServerData ? a.fnServerData.call(g,
            a.sAjaxSource, k.map(b, function(m, p) {
                return {
                    name: p,
                    value: m
                }
            }), h, a) : a.sAjaxSource || "string" === typeof f ? a.jqXHR = k.ajax(k.extend(n, {
            url: f || a.sAjaxSource
        })) : "function" === typeof f ? a.jqXHR = f.call(g, b, h, a) : (a.jqXHR = k.ajax(k.extend(n, f)), f.data = l)
    }

    function Fb(a) {
        return a.bAjaxDataGet ? (a.iDraw++, U(a, !0), La(a, Ob(a), function(b) {
            Pb(a, b)
        }), !1) : !0
    }

    function Ob(a) {
        var b = a.aoColumns,
            c = b.length,
            d = a.oFeatures,
            e = a.oPreviousSearch,
            f = a.aoPreSearchCols,
            g = [],
            h = pa(a);
        var l = a._iDisplayStart;
        var n = !1 !== d.bPaginate ? a._iDisplayLength :
            -1;
        var m = function(x, r) {
            g.push({
                name: x,
                value: r
            })
        };
        m("sEcho", a.iDraw);
        m("iColumns", c);
        m("sColumns", T(b, "sName").join(","));
        m("iDisplayStart", l);
        m("iDisplayLength", n);
        var p = {
            draw: a.iDraw,
            columns: [],
            order: [],
            start: l,
            length: n,
            search: {
                value: e.sSearch,
                regex: e.bRegex
            }
        };
        for (l = 0; l < c; l++) {
            var t = b[l];
            var v = f[l];
            n = "function" == typeof t.mData ? "function" : t.mData;
            p.columns.push({
                data: n,
                name: t.sName,
                searchable: t.bSearchable,
                orderable: t.bSortable,
                search: {
                    value: v.sSearch,
                    regex: v.bRegex
                }
            });
            m("mDataProp_" + l, n);
            d.bFilter &&
                (m("sSearch_" + l, v.sSearch), m("bRegex_" + l, v.bRegex), m("bSearchable_" + l, t.bSearchable));
            d.bSort && m("bSortable_" + l, t.bSortable)
        }
        d.bFilter && (m("sSearch", e.sSearch), m("bRegex", e.bRegex));
        d.bSort && (k.each(h, function(x, r) {
            p.order.push({
                column: r.col,
                dir: r.dir
            });
            m("iSortCol_" + x, r.col);
            m("sSortDir_" + x, r.dir)
        }), m("iSortingCols", h.length));
        b = u.ext.legacy.ajax;
        return null === b ? a.sAjaxSource ? g : p : b ? g : p
    }

    function Pb(a, b) {
        var c = function(g, h) {
                return b[g] !== q ? b[g] : b[h]
            },
            d = Ma(a, b),
            e = c("sEcho", "draw"),
            f = c("iTotalRecords",
                "recordsTotal");
        c = c("iTotalDisplayRecords", "recordsFiltered");
        if (e !== q) {
            if (1 * e < a.iDraw) return;
            a.iDraw = 1 * e
        }
        Ha(a);
        a._iRecordsTotal = parseInt(f, 10);
        a._iRecordsDisplay = parseInt(c, 10);
        e = 0;
        for (f = d.length; e < f; e++) ea(a, d[e]);
        a.aiDisplay = a.aiDisplayMaster.slice();
        a.bAjaxDataGet = !1;
        fa(a);
        a._bInitComplete || Na(a, b);
        a.bAjaxDataGet = !0;
        U(a, !1)
    }

    function Ma(a, b) {
        a = k.isPlainObject(a.ajax) && a.ajax.dataSrc !== q ? a.ajax.dataSrc : a.sAjaxDataProp;
        return "data" === a ? b.aaData || b[a] : "" !== a ? ia(a)(b) : b
    }

    function Jb(a) {
        var b = a.oClasses,
            c = a.sTableId,
            d = a.oLanguage,
            e = a.oPreviousSearch,
            f = a.aanFeatures,
            g = '<input type="search" class="' + b.sFilterInput + '"/>',
            h = d.sSearch;
        h = h.match(/_INPUT_/) ? h.replace("_INPUT_", g) : h + g;
        b = k("<div/>", {
            id: f.f ? null : c + "_filter",
            "class": b.sFilter
        }).append(k("<label/>").append(h));
        var l = function() {
            var m = this.value ? this.value : "";
            m != e.sSearch && (ya(a, {
                sSearch: m,
                bRegex: e.bRegex,
                bSmart: e.bSmart,
                bCaseInsensitive: e.bCaseInsensitive
            }), a._iDisplayStart = 0, fa(a))
        };
        f = null !== a.searchDelay ? a.searchDelay : "ssp" === P(a) ? 400 : 0;
        var n =
            k("input", b).val(e.sSearch).attr("placeholder", d.sSearchPlaceholder).on("keyup.DT search.DT input.DT paste.DT cut.DT", f ? fb(l, f) : l).on("mouseup", function(m) {
                setTimeout(function() {
                    l.call(n[0])
                }, 10)
            }).on("keypress.DT", function(m) {
                if (13 == m.keyCode) return !1
            }).attr("aria-controls", c);
        k(a.nTable).on("search.dt.DT", function(m, p) {
            if (a === p) try {
                n[0] !== z.activeElement && n.val(e.sSearch)
            } catch (t) {}
        });
        return b[0]
    }

    function ya(a, b, c) {
        var d = a.oPreviousSearch,
            e = a.aoPreSearchCols,
            f = function(h) {
                d.sSearch = h.sSearch;
                d.bRegex =
                    h.bRegex;
                d.bSmart = h.bSmart;
                d.bCaseInsensitive = h.bCaseInsensitive
            },
            g = function(h) {
                return h.bEscapeRegex !== q ? !h.bEscapeRegex : h.bRegex
            };
        Ya(a);
        if ("ssp" != P(a)) {
            Qb(a, b.sSearch, c, g(b), b.bSmart, b.bCaseInsensitive);
            f(b);
            for (b = 0; b < e.length; b++) Rb(a, e[b].sSearch, b, g(e[b]), e[b].bSmart, e[b].bCaseInsensitive);
            Sb(a)
        } else f(b);
        a.bFiltered = !0;
        H(a, null, "search", [a])
    }

    function Sb(a) {
        for (var b = u.ext.search, c = a.aiDisplay, d, e, f = 0, g = b.length; f < g; f++) {
            for (var h = [], l = 0, n = c.length; l < n; l++) e = c[l], d = a.aoData[e], b[f](a, d._aFilterData,
                e, d._aData, l) && h.push(e);
            c.length = 0;
            k.merge(c, h)
        }
    }

    function Rb(a, b, c, d, e, f) {
        if ("" !== b) {
            var g = [],
                h = a.aiDisplay;
            d = gb(b, d, e, f);
            for (e = 0; e < h.length; e++) b = a.aoData[h[e]]._aFilterData[c], d.test(b) && g.push(h[e]);
            a.aiDisplay = g
        }
    }

    function Qb(a, b, c, d, e, f) {
        e = gb(b, d, e, f);
        var g = a.oPreviousSearch.sSearch,
            h = a.aiDisplayMaster;
        f = [];
        0 !== u.ext.search.length && (c = !0);
        var l = Tb(a);
        if (0 >= b.length) a.aiDisplay = h.slice();
        else {
            if (l || c || d || g.length > b.length || 0 !== b.indexOf(g) || a.bSorted) a.aiDisplay = h.slice();
            b = a.aiDisplay;
            for (c =
                0; c < b.length; c++) e.test(a.aoData[b[c]]._sFilterRow) && f.push(b[c]);
            a.aiDisplay = f
        }
    }

    function gb(a, b, c, d) {
        a = b ? a : hb(a);
        c && (a = "^(?=.*?" + k.map(a.match(/"[^"]+"|[^ ]+/g) || [""], function(e) {
            if ('"' === e.charAt(0)) {
                var f = e.match(/^"(.*)"$/);
                e = f ? f[1] : e
            }
            return e.replace('"', "")
        }).join(")(?=.*?") + ").*$");
        return new RegExp(a, d ? "i" : "")
    }

    function Tb(a) {
        var b = a.aoColumns,
            c, d, e = u.ext.type.search;
        var f = !1;
        var g = 0;
        for (c = a.aoData.length; g < c; g++) {
            var h = a.aoData[g];
            if (!h._aFilterData) {
                var l = [];
                var n = 0;
                for (d = b.length; n < d; n++) {
                    f =
                        b[n];
                    if (f.bSearchable) {
                        var m = S(a, g, n, "filter");
                        e[f.sType] && (m = e[f.sType](m));
                        null === m && (m = "");
                        "string" !== typeof m && m.toString && (m = m.toString())
                    } else m = "";
                    m.indexOf && -1 !== m.indexOf("&") && (Oa.innerHTML = m, m = rc ? Oa.textContent : Oa.innerText);
                    m.replace && (m = m.replace(/[\r\n\u2028]/g, ""));
                    l.push(m)
                }
                h._aFilterData = l;
                h._sFilterRow = l.join("  ");
                f = !0
            }
        }
        return f
    }

    function Ub(a) {
        return {
            search: a.sSearch,
            smart: a.bSmart,
            regex: a.bRegex,
            caseInsensitive: a.bCaseInsensitive
        }
    }

    function Vb(a) {
        return {
            sSearch: a.search,
            bSmart: a.smart,
            bRegex: a.regex,
            bCaseInsensitive: a.caseInsensitive
        }
    }

    function Mb(a) {
        var b = a.sTableId,
            c = a.aanFeatures.i,
            d = k("<div/>", {
                "class": a.oClasses.sInfo,
                id: c ? null : b + "_info"
            });
        c || (a.aoDrawCallback.push({
            fn: Wb,
            sName: "information"
        }), d.attr("role", "status").attr("aria-live", "polite"), k(a.nTable).attr("aria-describedby", b + "_info"));
        return d[0]
    }

    function Wb(a) {
        var b = a.aanFeatures.i;
        if (0 !== b.length) {
            var c = a.oLanguage,
                d = a._iDisplayStart + 1,
                e = a.fnDisplayEnd(),
                f = a.fnRecordsTotal(),
                g = a.fnRecordsDisplay(),
                h = g ? c.sInfo : c.sInfoEmpty;
            g !== f && (h += " " + c.sInfoFiltered);
            h += c.sInfoPostFix;
            h = Xb(a, h);
            c = c.fnInfoCallback;
            null !== c && (h = c.call(a.oInstance, a, d, e, f, g, h));
            k(b).html(h)
        }
    }

    function Xb(a, b) {
        var c = a.fnFormatNumber,
            d = a._iDisplayStart + 1,
            e = a._iDisplayLength,
            f = a.fnRecordsDisplay(),
            g = -1 === e;
        return b.replace(/_START_/g, c.call(a, d)).replace(/_END_/g, c.call(a, a.fnDisplayEnd())).replace(/_MAX_/g, c.call(a, a.fnRecordsTotal())).replace(/_TOTAL_/g, c.call(a, f)).replace(/_PAGE_/g, c.call(a, g ? 1 : Math.ceil(d / e))).replace(/_PAGES_/g, c.call(a, g ? 1 : Math.ceil(f /
            e)))
    }

    function za(a) {
        var b = a.iInitDisplayStart,
            c = a.aoColumns;
        var d = a.oFeatures;
        var e = a.bDeferLoading;
        if (a.bInitialised) {
            Hb(a);
            Eb(a);
            xa(a, a.aoHeader);
            xa(a, a.aoFooter);
            U(a, !0);
            d.bAutoWidth && Xa(a);
            var f = 0;
            for (d = c.length; f < d; f++) {
                var g = c[f];
                g.sWidth && (g.nTh.style.width = K(g.sWidth))
            }
            H(a, null, "preInit", [a]);
            ja(a);
            c = P(a);
            if ("ssp" != c || e) "ajax" == c ? La(a, [], function(h) {
                var l = Ma(a, h);
                for (f = 0; f < l.length; f++) ea(a, l[f]);
                a.iInitDisplayStart = b;
                ja(a);
                U(a, !1);
                Na(a, h)
            }, a) : (U(a, !1), Na(a))
        } else setTimeout(function() {
                za(a)
            },
            200)
    }

    function Na(a, b) {
        a._bInitComplete = !0;
        (b || a.oInit.aaData) && ra(a);
        H(a, null, "plugin-init", [a, b]);
        H(a, "aoInitComplete", "init", [a, b])
    }

    function ib(a, b) {
        b = parseInt(b, 10);
        a._iDisplayLength = b;
        jb(a);
        H(a, null, "length", [a, b])
    }

    function Ib(a) {
        var b = a.oClasses,
            c = a.sTableId,
            d = a.aLengthMenu,
            e = Array.isArray(d[0]),
            f = e ? d[0] : d;
        d = e ? d[1] : d;
        e = k("<select/>", {
            name: c + "_length",
            "aria-controls": c,
            "class": b.sLengthSelect
        });
        for (var g = 0, h = f.length; g < h; g++) e[0][g] = new Option("number" === typeof d[g] ? a.fnFormatNumber(d[g]) : d[g],
            f[g]);
        var l = k("<div><label/></div>").addClass(b.sLength);
        a.aanFeatures.l || (l[0].id = c + "_length");
        l.children().append(a.oLanguage.sLengthMenu.replace("_MENU_", e[0].outerHTML));
        k("select", l).val(a._iDisplayLength).on("change.DT", function(n) {
            ib(a, k(this).val());
            fa(a)
        });
        k(a.nTable).on("length.dt.DT", function(n, m, p) {
            a === m && k("select", l).val(p)
        });
        return l[0]
    }

    function Nb(a) {
        var b = a.sPaginationType,
            c = u.ext.pager[b],
            d = "function" === typeof c,
            e = function(g) {
                fa(g)
            };
        b = k("<div/>").addClass(a.oClasses.sPaging + b)[0];
        var f = a.aanFeatures;
        d || c.fnInit(a, b, e);
        f.p || (b.id = a.sTableId + "_paginate", a.aoDrawCallback.push({
            fn: function(g) {
                if (d) {
                    var h = g._iDisplayStart,
                        l = g._iDisplayLength,
                        n = g.fnRecordsDisplay(),
                        m = -1 === l;
                    h = m ? 0 : Math.ceil(h / l);
                    l = m ? 1 : Math.ceil(n / l);
                    n = c(h, l);
                    var p;
                    m = 0;
                    for (p = f.p.length; m < p; m++) eb(g, "pageButton")(g, f.p[m], m, n, h, l)
                } else c.fnUpdate(g, e)
            },
            sName: "pagination"
        }));
        return b
    }

    function kb(a, b, c) {
        var d = a._iDisplayStart,
            e = a._iDisplayLength,
            f = a.fnRecordsDisplay();
        0 === f || -1 === e ? d = 0 : "number" === typeof b ? (d = b * e, d > f &&
            (d = 0)) : "first" == b ? d = 0 : "previous" == b ? (d = 0 <= e ? d - e : 0, 0 > d && (d = 0)) : "next" == b ? d + e < f && (d += e) : "last" == b ? d = Math.floor((f - 1) / e) * e : aa(a, 0, "Unknown paging action: " + b, 5);
        b = a._iDisplayStart !== d;
        a._iDisplayStart = d;
        b && (H(a, null, "page", [a]), c && fa(a));
        return b
    }

    function Kb(a) {
        return k("<div/>", {
            id: a.aanFeatures.r ? null : a.sTableId + "_processing",
            "class": a.oClasses.sProcessing
        }).html(a.oLanguage.sProcessing).insertBefore(a.nTable)[0]
    }

    function U(a, b) {
        a.oFeatures.bProcessing && k(a.aanFeatures.r).css("display", b ? "block" : "none");
        H(a, null, "processing", [a, b])
    }

    function Lb(a) {
        var b = k(a.nTable);
        b.attr("role", "grid");
        var c = a.oScroll;
        if ("" === c.sX && "" === c.sY) return a.nTable;
        var d = c.sX,
            e = c.sY,
            f = a.oClasses,
            g = b.children("caption"),
            h = g.length ? g[0]._captionSide : null,
            l = k(b[0].cloneNode(!1)),
            n = k(b[0].cloneNode(!1)),
            m = b.children("tfoot");
        m.length || (m = null);
        l = k("<div/>", {
            "class": f.sScrollWrapper
        }).append(k("<div/>", {
            "class": f.sScrollHead
        }).css({
            overflow: "hidden",
            position: "relative",
            border: 0,
            width: d ? d ? K(d) : null : "100%"
        }).append(k("<div/>", {
            "class": f.sScrollHeadInner
        }).css({
            "box-sizing": "content-box",
            width: c.sXInner || "100%"
        }).append(l.removeAttr("id").css("margin-left", 0).append("top" === h ? g : null).append(b.children("thead"))))).append(k("<div/>", {
            "class": f.sScrollBody
        }).css({
            position: "relative",
            overflow: "auto",
            width: d ? K(d) : null
        }).append(b));
        m && l.append(k("<div/>", {
            "class": f.sScrollFoot
        }).css({
            overflow: "hidden",
            border: 0,
            width: d ? d ? K(d) : null : "100%"
        }).append(k("<div/>", {
            "class": f.sScrollFootInner
        }).append(n.removeAttr("id").css("margin-left",
            0).append("bottom" === h ? g : null).append(b.children("tfoot")))));
        b = l.children();
        var p = b[0];
        f = b[1];
        var t = m ? b[2] : null;
        if (d) k(f).on("scroll.DT", function(v) {
            v = this.scrollLeft;
            p.scrollLeft = v;
            m && (t.scrollLeft = v)
        });
        k(f).css("max-height", e);
        c.bCollapse || k(f).css("height", e);
        a.nScrollHead = p;
        a.nScrollBody = f;
        a.nScrollFoot = t;
        a.aoDrawCallback.push({
            fn: Ea,
            sName: "scrolling"
        });
        return l[0]
    }

    function Ea(a) {
        var b = a.oScroll,
            c = b.sX,
            d = b.sXInner,
            e = b.sY;
        b = b.iBarWidth;
        var f = k(a.nScrollHead),
            g = f[0].style,
            h = f.children("div"),
            l =
            h[0].style,
            n = h.children("table");
        h = a.nScrollBody;
        var m = k(h),
            p = h.style,
            t = k(a.nScrollFoot).children("div"),
            v = t.children("table"),
            x = k(a.nTHead),
            r = k(a.nTable),
            A = r[0],
            E = A.style,
            I = a.nTFoot ? k(a.nTFoot) : null,
            W = a.oBrowser,
            M = W.bScrollOversize,
            C = T(a.aoColumns, "nTh"),
            B = [],
            ba = [],
            X = [],
            lb = [],
            Aa, Yb = function(F) {
                F = F.style;
                F.paddingTop = "0";
                F.paddingBottom = "0";
                F.borderTopWidth = "0";
                F.borderBottomWidth = "0";
                F.height = 0
            };
        var ha = h.scrollHeight > h.clientHeight;
        if (a.scrollBarVis !== ha && a.scrollBarVis !== q) a.scrollBarVis = ha, ra(a);
        else {
            a.scrollBarVis = ha;
            r.children("thead, tfoot").remove();
            if (I) {
                var ka = I.clone().prependTo(r);
                var la = I.find("tr");
                ka = ka.find("tr")
            }
            var mb = x.clone().prependTo(r);
            x = x.find("tr");
            ha = mb.find("tr");
            mb.find("th, td").removeAttr("tabindex");
            c || (p.width = "100%", f[0].style.width = "100%");
            k.each(Ka(a, mb), function(F, Y) {
                Aa = sa(a, F);
                Y.style.width = a.aoColumns[Aa].sWidth
            });
            I && Z(function(F) {
                F.style.width = ""
            }, ka);
            f = r.outerWidth();
            "" === c ? (E.width = "100%", M && (r.find("tbody").height() > h.offsetHeight || "scroll" == m.css("overflow-y")) &&
                (E.width = K(r.outerWidth() - b)), f = r.outerWidth()) : "" !== d && (E.width = K(d), f = r.outerWidth());
            Z(Yb, ha);
            Z(function(F) {
                X.push(F.innerHTML);
                B.push(K(k(F).css("width")))
            }, ha);
            Z(function(F, Y) {
                -1 !== k.inArray(F, C) && (F.style.width = B[Y])
            }, x);
            k(ha).height(0);
            I && (Z(Yb, ka), Z(function(F) {
                lb.push(F.innerHTML);
                ba.push(K(k(F).css("width")))
            }, ka), Z(function(F, Y) {
                F.style.width = ba[Y]
            }, la), k(ka).height(0));
            Z(function(F, Y) {
                F.innerHTML = '<div class="dataTables_sizing">' + X[Y] + "</div>";
                F.childNodes[0].style.height = "0";
                F.childNodes[0].style.overflow =
                    "hidden";
                F.style.width = B[Y]
            }, ha);
            I && Z(function(F, Y) {
                F.innerHTML = '<div class="dataTables_sizing">' + lb[Y] + "</div>";
                F.childNodes[0].style.height = "0";
                F.childNodes[0].style.overflow = "hidden";
                F.style.width = ba[Y]
            }, ka);
            r.outerWidth() < f ? (la = h.scrollHeight > h.offsetHeight || "scroll" == m.css("overflow-y") ? f + b : f, M && (h.scrollHeight > h.offsetHeight || "scroll" == m.css("overflow-y")) && (E.width = K(la - b)), "" !== c && "" === d || aa(a, 1, "Possible column misalignment", 6)) : la = "100%";
            p.width = K(la);
            g.width = K(la);
            I && (a.nScrollFoot.style.width =
                K(la));
            !e && M && (p.height = K(A.offsetHeight + b));
            c = r.outerWidth();
            n[0].style.width = K(c);
            l.width = K(c);
            d = r.height() > h.clientHeight || "scroll" == m.css("overflow-y");
            e = "padding" + (W.bScrollbarLeft ? "Left" : "Right");
            l[e] = d ? b + "px" : "0px";
            I && (v[0].style.width = K(c), t[0].style.width = K(c), t[0].style[e] = d ? b + "px" : "0px");
            r.children("colgroup").insertBefore(r.children("thead"));
            m.trigger("scroll");
            !a.bSorted && !a.bFiltered || a._drawHold || (h.scrollTop = 0)
        }
    }

    function Z(a, b, c) {
        for (var d = 0, e = 0, f = b.length, g, h; e < f;) {
            g = b[e].firstChild;
            for (h = c ? c[e].firstChild : null; g;) 1 === g.nodeType && (c ? a(g, h, d) : a(g, d), d++), g = g.nextSibling, h = c ? h.nextSibling : null;
            e++
        }
    }

    function Xa(a) {
        var b = a.nTable,
            c = a.aoColumns,
            d = a.oScroll,
            e = d.sY,
            f = d.sX,
            g = d.sXInner,
            h = c.length,
            l = Fa(a, "bVisible"),
            n = k("th", a.nTHead),
            m = b.getAttribute("width"),
            p = b.parentNode,
            t = !1,
            v, x = a.oBrowser;
        d = x.bScrollOversize;
        (v = b.style.width) && -1 !== v.indexOf("%") && (m = v);
        for (v = 0; v < l.length; v++) {
            var r = c[l[v]];
            null !== r.sWidth && (r.sWidth = Zb(r.sWidthOrig, p), t = !0)
        }
        if (d || !t && !f && !e && h == na(a) && h == n.length)
            for (v =
                0; v < h; v++) l = sa(a, v), null !== l && (c[l].sWidth = K(n.eq(v).width()));
        else {
            h = k(b).clone().css("visibility", "hidden").removeAttr("id");
            h.find("tbody tr").remove();
            var A = k("<tr/>").appendTo(h.find("tbody"));
            h.find("thead, tfoot").remove();
            h.append(k(a.nTHead).clone()).append(k(a.nTFoot).clone());
            h.find("tfoot th, tfoot td").css("width", "");
            n = Ka(a, h.find("thead")[0]);
            for (v = 0; v < l.length; v++) r = c[l[v]], n[v].style.width = null !== r.sWidthOrig && "" !== r.sWidthOrig ? K(r.sWidthOrig) : "", r.sWidthOrig && f && k(n[v]).append(k("<div/>").css({
                width: r.sWidthOrig,
                margin: 0,
                padding: 0,
                border: 0,
                height: 1
            }));
            if (a.aoData.length)
                for (v = 0; v < l.length; v++) t = l[v], r = c[t], k($b(a, t)).clone(!1).append(r.sContentPadding).appendTo(A);
            k("[name]", h).removeAttr("name");
            r = k("<div/>").css(f || e ? {
                position: "absolute",
                top: 0,
                left: 0,
                height: 1,
                right: 0,
                overflow: "hidden"
            } : {}).append(h).appendTo(p);
            f && g ? h.width(g) : f ? (h.css("width", "auto"), h.removeAttr("width"), h.width() < p.clientWidth && m && h.width(p.clientWidth)) : e ? h.width(p.clientWidth) : m && h.width(m);
            for (v = e = 0; v < l.length; v++) p = k(n[v]), g = p.outerWidth() -
                p.width(), p = x.bBounding ? Math.ceil(n[v].getBoundingClientRect().width) : p.outerWidth(), e += p, c[l[v]].sWidth = K(p - g);
            b.style.width = K(e);
            r.remove()
        }
        m && (b.style.width = K(m));
        !m && !f || a._reszEvt || (b = function() {
            k(y).on("resize.DT-" + a.sInstance, fb(function() {
                ra(a)
            }))
        }, d ? setTimeout(b, 1E3) : b(), a._reszEvt = !0)
    }

    function Zb(a, b) {
        if (!a) return 0;
        a = k("<div/>").css("width", K(a)).appendTo(b || z.body);
        b = a[0].offsetWidth;
        a.remove();
        return b
    }

    function $b(a, b) {
        var c = ac(a, b);
        if (0 > c) return null;
        var d = a.aoData[c];
        return d.nTr ? d.anCells[b] :
            k("<td/>").html(S(a, c, b, "display"))[0]
    }

    function ac(a, b) {
        for (var c, d = -1, e = -1, f = 0, g = a.aoData.length; f < g; f++) c = S(a, f, b, "display") + "", c = c.replace(sc, ""), c = c.replace(/&nbsp;/g, " "), c.length > d && (d = c.length, e = f);
        return e
    }

    function K(a) {
        return null === a ? "0px" : "number" == typeof a ? 0 > a ? "0px" : a + "px" : a.match(/\d$/) ? a + "px" : a
    }

    function pa(a) {
        var b = [],
            c = a.aoColumns;
        var d = a.aaSortingFixed;
        var e = k.isPlainObject(d);
        var f = [];
        var g = function(m) {
            m.length && !Array.isArray(m[0]) ? f.push(m) : k.merge(f, m)
        };
        Array.isArray(d) && g(d);
        e && d.pre && g(d.pre);
        g(a.aaSorting);
        e && d.post && g(d.post);
        for (a = 0; a < f.length; a++) {
            var h = f[a][0];
            g = c[h].aDataSort;
            d = 0;
            for (e = g.length; d < e; d++) {
                var l = g[d];
                var n = c[l].sType || "string";
                f[a]._idx === q && (f[a]._idx = k.inArray(f[a][1], c[l].asSorting));
                b.push({
                    src: h,
                    col: l,
                    dir: f[a][1],
                    index: f[a]._idx,
                    type: n,
                    formatter: u.ext.type.order[n + "-pre"]
                })
            }
        }
        return b
    }

    function Gb(a) {
        var b, c = [],
            d = u.ext.type.order,
            e = a.aoData,
            f = 0,
            g = a.aiDisplayMaster;
        Ya(a);
        var h = pa(a);
        var l = 0;
        for (b = h.length; l < b; l++) {
            var n = h[l];
            n.formatter && f++;
            bc(a,
                n.col)
        }
        if ("ssp" != P(a) && 0 !== h.length) {
            l = 0;
            for (b = g.length; l < b; l++) c[g[l]] = l;
            f === h.length ? g.sort(function(m, p) {
                var t, v = h.length,
                    x = e[m]._aSortData,
                    r = e[p]._aSortData;
                for (t = 0; t < v; t++) {
                    var A = h[t];
                    var E = x[A.col];
                    var I = r[A.col];
                    E = E < I ? -1 : E > I ? 1 : 0;
                    if (0 !== E) return "asc" === A.dir ? E : -E
                }
                E = c[m];
                I = c[p];
                return E < I ? -1 : E > I ? 1 : 0
            }) : g.sort(function(m, p) {
                var t, v = h.length,
                    x = e[m]._aSortData,
                    r = e[p]._aSortData;
                for (t = 0; t < v; t++) {
                    var A = h[t];
                    var E = x[A.col];
                    var I = r[A.col];
                    A = d[A.type + "-" + A.dir] || d["string-" + A.dir];
                    E = A(E, I);
                    if (0 !== E) return E
                }
                E =
                    c[m];
                I = c[p];
                return E < I ? -1 : E > I ? 1 : 0
            })
        }
        a.bSorted = !0
    }

    function cc(a) {
        var b = a.aoColumns,
            c = pa(a);
        a = a.oLanguage.oAria;
        for (var d = 0, e = b.length; d < e; d++) {
            var f = b[d];
            var g = f.asSorting;
            var h = f.sTitle.replace(/<.*?>/g, "");
            var l = f.nTh;
            l.removeAttribute("aria-sort");
            f.bSortable && (0 < c.length && c[0].col == d ? (l.setAttribute("aria-sort", "asc" == c[0].dir ? "ascending" : "descending"), f = g[c[0].index + 1] || g[0]) : f = g[0], h += "asc" === f ? a.sSortAscending : a.sSortDescending);
            l.setAttribute("aria-label", h)
        }
    }

    function nb(a, b, c, d) {
        var e = a.aaSorting,
            f = a.aoColumns[b].asSorting,
            g = function(h, l) {
                var n = h._idx;
                n === q && (n = k.inArray(h[1], f));
                return n + 1 < f.length ? n + 1 : l ? null : 0
            };
        "number" === typeof e[0] && (e = a.aaSorting = [e]);
        c && a.oFeatures.bSortMulti ? (c = k.inArray(b, T(e, "0")), -1 !== c ? (b = g(e[c], !0), null === b && 1 === e.length && (b = 0), null === b ? e.splice(c, 1) : (e[c][1] = f[b], e[c]._idx = b)) : (e.push([b, f[0], 0]), e[e.length - 1]._idx = 0)) : e.length && e[0][0] == b ? (b = g(e[0]), e.length = 1, e[0][1] = f[b], e[0]._idx = b) : (e.length = 0, e.push([b, f[0]]), e[0]._idx = 0);
        ja(a);
        "function" == typeof d && d(a)
    }

    function db(a, b, c, d) {
        var e = a.aoColumns[c];
        ob(b, {}, function(f) {
            !1 !== e.bSortable && (a.oFeatures.bProcessing ? (U(a, !0), setTimeout(function() {
                nb(a, c, f.shiftKey, d);
                "ssp" !== P(a) && U(a, !1)
            }, 0)) : nb(a, c, f.shiftKey, d))
        })
    }

    function Pa(a) {
        var b = a.aLastSort,
            c = a.oClasses.sSortColumn,
            d = pa(a),
            e = a.oFeatures,
            f;
        if (e.bSort && e.bSortClasses) {
            e = 0;
            for (f = b.length; e < f; e++) {
                var g = b[e].src;
                k(T(a.aoData, "anCells", g)).removeClass(c + (2 > e ? e + 1 : 3))
            }
            e = 0;
            for (f = d.length; e < f; e++) g = d[e].src, k(T(a.aoData, "anCells", g)).addClass(c + (2 > e ? e + 1 : 3))
        }
        a.aLastSort =
            d
    }

    function bc(a, b) {
        var c = a.aoColumns[b],
            d = u.ext.order[c.sSortDataType],
            e;
        d && (e = d.call(a.oInstance, a, b, ta(a, b)));
        for (var f, g = u.ext.type.order[c.sType + "-pre"], h = 0, l = a.aoData.length; h < l; h++)
            if (c = a.aoData[h], c._aSortData || (c._aSortData = []), !c._aSortData[b] || d) f = d ? e[h] : S(a, h, b, "sort"), c._aSortData[b] = g ? g(f) : f
    }

    function Qa(a) {
        if (a.oFeatures.bStateSave && !a.bDestroying) {
            var b = {
                time: +new Date,
                start: a._iDisplayStart,
                length: a._iDisplayLength,
                order: k.extend(!0, [], a.aaSorting),
                search: Ub(a.oPreviousSearch),
                columns: k.map(a.aoColumns,
                    function(c, d) {
                        return {
                            visible: c.bVisible,
                            search: Ub(a.aoPreSearchCols[d])
                        }
                    })
            };
            H(a, "aoStateSaveParams", "stateSaveParams", [a, b]);
            a.oSavedState = b;
            a.fnStateSaveCallback.call(a.oInstance, a, b)
        }
    }

    function dc(a, b, c) {
        var d, e, f = a.aoColumns;
        b = function(h) {
            if (h && h.time) {
                var l = H(a, "aoStateLoadParams", "stateLoadParams", [a, h]);
                if (-1 === k.inArray(!1, l) && (l = a.iStateDuration, !(0 < l && h.time < +new Date - 1E3 * l || h.columns && f.length !== h.columns.length))) {
                    a.oLoadedState = k.extend(!0, {}, h);
                    h.start !== q && (a._iDisplayStart = h.start, a.iInitDisplayStart =
                        h.start);
                    h.length !== q && (a._iDisplayLength = h.length);
                    h.order !== q && (a.aaSorting = [], k.each(h.order, function(n, m) {
                        a.aaSorting.push(m[0] >= f.length ? [0, m[1]] : m)
                    }));
                    h.search !== q && k.extend(a.oPreviousSearch, Vb(h.search));
                    if (h.columns)
                        for (d = 0, e = h.columns.length; d < e; d++) l = h.columns[d], l.visible !== q && (f[d].bVisible = l.visible), l.search !== q && k.extend(a.aoPreSearchCols[d], Vb(l.search));
                    H(a, "aoStateLoaded", "stateLoaded", [a, h])
                }
            }
            c()
        };
        if (a.oFeatures.bStateSave) {
            var g = a.fnStateLoadCallback.call(a.oInstance, a, b);
            g !==
                q && b(g)
        } else c()
    }

    function Ra(a) {
        var b = u.settings;
        a = k.inArray(a, T(b, "nTable"));
        return -1 !== a ? b[a] : null
    }

    function aa(a, b, c, d) {
        c = "DataTables warning: " + (a ? "table id=" + a.sTableId + " - " : "") + c;
        d && (c += ". For more information about this error, please see http://datatables.net/tn/" + d);
        if (b) y.console && console.log && console.log(c);
        else if (b = u.ext, b = b.sErrMode || b.errMode, a && H(a, null, "error", [a, d, c]), "alert" == b) alert(c);
        else {
            if ("throw" == b) throw Error(c);
            "function" == typeof b && b(a, d, c)
        }
    }

    function V(a, b, c, d) {
        Array.isArray(c) ?
            k.each(c, function(e, f) {
                Array.isArray(f) ? V(a, b, f[0], f[1]) : V(a, b, f)
            }) : (d === q && (d = c), b[c] !== q && (a[d] = b[c]))
    }

    function pb(a, b, c) {
        var d;
        for (d in b)
            if (b.hasOwnProperty(d)) {
                var e = b[d];
                k.isPlainObject(e) ? (k.isPlainObject(a[d]) || (a[d] = {}), k.extend(!0, a[d], e)) : c && "data" !== d && "aaData" !== d && Array.isArray(e) ? a[d] = e.slice() : a[d] = e
            } return a
    }

    function ob(a, b, c) {
        k(a).on("click.DT", b, function(d) {
            k(a).trigger("blur");
            c(d)
        }).on("keypress.DT", b, function(d) {
            13 === d.which && (d.preventDefault(), c(d))
        }).on("selectstart.DT", function() {
            return !1
        })
    }

    function Q(a, b, c, d) {
        c && a[b].push({
            fn: c,
            sName: d
        })
    }

    function H(a, b, c, d) {
        var e = [];
        b && (e = k.map(a[b].slice().reverse(), function(f, g) {
            return f.fn.apply(a.oInstance, d)
        }));
        null !== c && (b = k.Event(c + ".dt"), k(a.nTable).trigger(b, d), e.push(b.result));
        return e
    }

    function jb(a) {
        var b = a._iDisplayStart,
            c = a.fnDisplayEnd(),
            d = a._iDisplayLength;
        b >= c && (b = c - d);
        b -= b % d;
        if (-1 === d || 0 > b) b = 0;
        a._iDisplayStart = b
    }

    function eb(a, b) {
        a = a.renderer;
        var c = u.ext.renderer[b];
        return k.isPlainObject(a) && a[b] ? c[a[b]] || c._ : "string" === typeof a ? c[a] ||
            c._ : c._
    }

    function P(a) {
        return a.oFeatures.bServerSide ? "ssp" : a.ajax || a.sAjaxSource ? "ajax" : "dom"
    }

    function Ba(a, b) {
        var c = ec.numbers_length,
            d = Math.floor(c / 2);
        b <= c ? a = qa(0, b) : a <= d ? (a = qa(0, c - 2), a.push("ellipsis"), a.push(b - 1)) : (a >= b - 1 - d ? a = qa(b - (c - 2), b) : (a = qa(a - d + 2, a + d - 1), a.push("ellipsis"), a.push(b - 1)), a.splice(0, 0, "ellipsis"), a.splice(0, 0, 0));
        a.DT_el = "span";
        return a
    }

    function Va(a) {
        k.each({
            num: function(b) {
                return Sa(b, a)
            },
            "num-fmt": function(b) {
                return Sa(b, a, qb)
            },
            "html-num": function(b) {
                return Sa(b, a, Ta)
            },
            "html-num-fmt": function(b) {
                return Sa(b,
                    a, Ta, qb)
            }
        }, function(b, c) {
            L.type.order[b + a + "-pre"] = c;
            b.match(/^html\-/) && (L.type.search[b + a] = L.type.search.html)
        })
    }

    function fc(a) {
        return function() {
            var b = [Ra(this[u.ext.iApiIndex])].concat(Array.prototype.slice.call(arguments));
            return u.ext.internal[a].apply(this, b)
        }
    }
    var u = function(a) {
            this.$ = function(f, g) {
                return this.api(!0).$(f, g)
            };
            this._ = function(f, g) {
                return this.api(!0).rows(f, g).data()
            };
            this.api = function(f) {
                return f ? new D(Ra(this[L.iApiIndex])) : new D(this)
            };
            this.fnAddData = function(f, g) {
                var h = this.api(!0);
                f = Array.isArray(f) && (Array.isArray(f[0]) || k.isPlainObject(f[0])) ? h.rows.add(f) : h.row.add(f);
                (g === q || g) && h.draw();
                return f.flatten().toArray()
            };
            this.fnAdjustColumnSizing = function(f) {
                var g = this.api(!0).columns.adjust(),
                    h = g.settings()[0],
                    l = h.oScroll;
                f === q || f ? g.draw(!1) : ("" !== l.sX || "" !== l.sY) && Ea(h)
            };
            this.fnClearTable = function(f) {
                var g = this.api(!0).clear();
                (f === q || f) && g.draw()
            };
            this.fnClose = function(f) {
                this.api(!0).row(f).child.hide()
            };
            this.fnDeleteRow = function(f, g, h) {
                var l = this.api(!0);
                f = l.rows(f);
                var n =
                    f.settings()[0],
                    m = n.aoData[f[0][0]];
                f.remove();
                g && g.call(this, n, m);
                (h === q || h) && l.draw();
                return m
            };
            this.fnDestroy = function(f) {
                this.api(!0).destroy(f)
            };
            this.fnDraw = function(f) {
                this.api(!0).draw(f)
            };
            this.fnFilter = function(f, g, h, l, n, m) {
                n = this.api(!0);
                null === g || g === q ? n.search(f, h, l, m) : n.column(g).search(f, h, l, m);
                n.draw()
            };
            this.fnGetData = function(f, g) {
                var h = this.api(!0);
                if (f !== q) {
                    var l = f.nodeName ? f.nodeName.toLowerCase() : "";
                    return g !== q || "td" == l || "th" == l ? h.cell(f, g).data() : h.row(f).data() || null
                }
                return h.data().toArray()
            };
            this.fnGetNodes = function(f) {
                var g = this.api(!0);
                return f !== q ? g.row(f).node() : g.rows().nodes().flatten().toArray()
            };
            this.fnGetPosition = function(f) {
                var g = this.api(!0),
                    h = f.nodeName.toUpperCase();
                return "TR" == h ? g.row(f).index() : "TD" == h || "TH" == h ? (f = g.cell(f).index(), [f.row, f.columnVisible, f.column]) : null
            };
            this.fnIsOpen = function(f) {
                return this.api(!0).row(f).child.isShown()
            };
            this.fnOpen = function(f, g, h) {
                return this.api(!0).row(f).child(g, h).show().child()[0]
            };
            this.fnPageChange = function(f, g) {
                f = this.api(!0).page(f);
                (g === q || g) && f.draw(!1)
            };
            this.fnSetColumnVis = function(f, g, h) {
                f = this.api(!0).column(f).visible(g);
                (h === q || h) && f.columns.adjust().draw()
            };
            this.fnSettings = function() {
                return Ra(this[L.iApiIndex])
            };
            this.fnSort = function(f) {
                this.api(!0).order(f).draw()
            };
            this.fnSortListener = function(f, g, h) {
                this.api(!0).order.listener(f, g, h)
            };
            this.fnUpdate = function(f, g, h, l, n) {
                var m = this.api(!0);
                h === q || null === h ? m.row(g).data(f) : m.cell(g, h).data(f);
                (n === q || n) && m.columns.adjust();
                (l === q || l) && m.draw();
                return 0
            };
            this.fnVersionCheck =
                L.fnVersionCheck;
            var b = this,
                c = a === q,
                d = this.length;
            c && (a = {});
            this.oApi = this.internal = L.internal;
            for (var e in u.ext.internal) e && (this[e] = fc(e));
            this.each(function() {
                var f = {},
                    g = 1 < d ? pb(f, a, !0) : a,
                    h = 0,
                    l;
                f = this.getAttribute("id");
                var n = !1,
                    m = u.defaults,
                    p = k(this);
                if ("table" != this.nodeName.toLowerCase()) aa(null, 0, "Non-table node initialisation (" + this.nodeName + ")", 2);
                else {
                    yb(m);
                    zb(m.column);
                    O(m, m, !0);
                    O(m.column, m.column, !0);
                    O(m, k.extend(g, p.data()), !0);
                    var t = u.settings;
                    h = 0;
                    for (l = t.length; h < l; h++) {
                        var v = t[h];
                        if (v.nTable == this || v.nTHead && v.nTHead.parentNode == this || v.nTFoot && v.nTFoot.parentNode == this) {
                            var x = g.bRetrieve !== q ? g.bRetrieve : m.bRetrieve;
                            if (c || x) return v.oInstance;
                            if (g.bDestroy !== q ? g.bDestroy : m.bDestroy) {
                                v.oInstance.fnDestroy();
                                break
                            } else {
                                aa(v, 0, "Cannot reinitialise DataTable", 3);
                                return
                            }
                        }
                        if (v.sTableId == this.id) {
                            t.splice(h, 1);
                            break
                        }
                    }
                    if (null === f || "" === f) this.id = f = "DataTables_Table_" + u.ext._unique++;
                    var r = k.extend(!0, {}, u.models.oSettings, {
                        sDestroyWidth: p[0].style.width,
                        sInstance: f,
                        sTableId: f
                    });
                    r.nTable =
                        this;
                    r.oApi = b.internal;
                    r.oInit = g;
                    t.push(r);
                    r.oInstance = 1 === b.length ? b : p.dataTable();
                    yb(g);
                    ma(g.oLanguage);
                    g.aLengthMenu && !g.iDisplayLength && (g.iDisplayLength = Array.isArray(g.aLengthMenu[0]) ? g.aLengthMenu[0][0] : g.aLengthMenu[0]);
                    g = pb(k.extend(!0, {}, m), g);
                    V(r.oFeatures, g, "bPaginate bLengthChange bFilter bSort bSortMulti bInfo bProcessing bAutoWidth bSortClasses bServerSide bDeferRender".split(" "));
                    V(r, g, ["asStripeClasses", "ajax", "fnServerData", "fnFormatNumber", "sServerMethod", "aaSorting", "aaSortingFixed",
                        "aLengthMenu", "sPaginationType", "sAjaxSource", "sAjaxDataProp", "iStateDuration", "sDom", "bSortCellsTop", "iTabIndex", "fnStateLoadCallback", "fnStateSaveCallback", "renderer", "searchDelay", "rowId", ["iCookieDuration", "iStateDuration"],
                        ["oSearch", "oPreviousSearch"],
                        ["aoSearchCols", "aoPreSearchCols"],
                        ["iDisplayLength", "_iDisplayLength"]
                    ]);
                    V(r.oScroll, g, [
                        ["sScrollX", "sX"],
                        ["sScrollXInner", "sXInner"],
                        ["sScrollY", "sY"],
                        ["bScrollCollapse", "bCollapse"]
                    ]);
                    V(r.oLanguage, g, "fnInfoCallback");
                    Q(r, "aoDrawCallback", g.fnDrawCallback,
                        "user");
                    Q(r, "aoServerParams", g.fnServerParams, "user");
                    Q(r, "aoStateSaveParams", g.fnStateSaveParams, "user");
                    Q(r, "aoStateLoadParams", g.fnStateLoadParams, "user");
                    Q(r, "aoStateLoaded", g.fnStateLoaded, "user");
                    Q(r, "aoRowCallback", g.fnRowCallback, "user");
                    Q(r, "aoRowCreatedCallback", g.fnCreatedRow, "user");
                    Q(r, "aoHeaderCallback", g.fnHeaderCallback, "user");
                    Q(r, "aoFooterCallback", g.fnFooterCallback, "user");
                    Q(r, "aoInitComplete", g.fnInitComplete, "user");
                    Q(r, "aoPreDrawCallback", g.fnPreDrawCallback, "user");
                    r.rowIdFn =
                        ia(g.rowId);
                    Ab(r);
                    var A = r.oClasses;
                    k.extend(A, u.ext.classes, g.oClasses);
                    p.addClass(A.sTable);
                    r.iInitDisplayStart === q && (r.iInitDisplayStart = g.iDisplayStart, r._iDisplayStart = g.iDisplayStart);
                    null !== g.iDeferLoading && (r.bDeferLoading = !0, f = Array.isArray(g.iDeferLoading), r._iRecordsDisplay = f ? g.iDeferLoading[0] : g.iDeferLoading, r._iRecordsTotal = f ? g.iDeferLoading[1] : g.iDeferLoading);
                    var E = r.oLanguage;
                    k.extend(!0, E, g.oLanguage);
                    E.sUrl ? (k.ajax({
                        dataType: "json",
                        url: E.sUrl,
                        success: function(C) {
                            ma(C);
                            O(m.oLanguage,
                                C);
                            k.extend(!0, E, C);
                            H(r, null, "i18n", [r]);
                            za(r)
                        },
                        error: function() {
                            za(r)
                        }
                    }), n = !0) : H(r, null, "i18n", [r]);
                    null === g.asStripeClasses && (r.asStripeClasses = [A.sStripeOdd, A.sStripeEven]);
                    f = r.asStripeClasses;
                    var I = p.children("tbody").find("tr").eq(0); - 1 !== k.inArray(!0, k.map(f, function(C, B) {
                        return I.hasClass(C)
                    })) && (k("tbody tr", this).removeClass(f.join(" ")), r.asDestroyStripes = f.slice());
                    f = [];
                    t = this.getElementsByTagName("thead");
                    0 !== t.length && (wa(r.aoHeader, t[0]), f = Ka(r));
                    if (null === g.aoColumns)
                        for (t = [], h = 0, l =
                            f.length; h < l; h++) t.push(null);
                    else t = g.aoColumns;
                    h = 0;
                    for (l = t.length; h < l; h++) Wa(r, f ? f[h] : null);
                    Cb(r, g.aoColumnDefs, t, function(C, B) {
                        Da(r, C, B)
                    });
                    if (I.length) {
                        var W = function(C, B) {
                            return null !== C.getAttribute("data-" + B) ? B : null
                        };
                        k(I[0]).children("th, td").each(function(C, B) {
                            var ba = r.aoColumns[C];
                            if (ba.mData === C) {
                                var X = W(B, "sort") || W(B, "order");
                                B = W(B, "filter") || W(B, "search");
                                if (null !== X || null !== B) ba.mData = {
                                    _: C + ".display",
                                    sort: null !== X ? C + ".@data-" + X : q,
                                    type: null !== X ? C + ".@data-" + X : q,
                                    filter: null !== B ? C + ".@data-" +
                                        B : q
                                }, Da(r, C)
                            }
                        })
                    }
                    var M = r.oFeatures;
                    f = function() {
                        if (g.aaSorting === q) {
                            var C = r.aaSorting;
                            h = 0;
                            for (l = C.length; h < l; h++) C[h][1] = r.aoColumns[h].asSorting[0]
                        }
                        Pa(r);
                        M.bSort && Q(r, "aoDrawCallback", function() {
                            if (r.bSorted) {
                                var ba = pa(r),
                                    X = {};
                                k.each(ba, function(lb, Aa) {
                                    X[Aa.src] = Aa.dir
                                });
                                H(r, null, "order", [r, ba, X]);
                                cc(r)
                            }
                        });
                        Q(r, "aoDrawCallback", function() {
                            (r.bSorted || "ssp" === P(r) || M.bDeferRender) && Pa(r)
                        }, "sc");
                        C = p.children("caption").each(function() {
                            this._captionSide = k(this).css("caption-side")
                        });
                        var B = p.children("thead");
                        0 === B.length && (B = k("<thead/>").appendTo(p));
                        r.nTHead = B[0];
                        B = p.children("tbody");
                        0 === B.length && (B = k("<tbody/>").appendTo(p));
                        r.nTBody = B[0];
                        B = p.children("tfoot");
                        0 === B.length && 0 < C.length && ("" !== r.oScroll.sX || "" !== r.oScroll.sY) && (B = k("<tfoot/>").appendTo(p));
                        0 === B.length || 0 === B.children().length ? p.addClass(A.sNoFooter) : 0 < B.length && (r.nTFoot = B[0], wa(r.aoFooter, r.nTFoot));
                        if (g.aaData)
                            for (h = 0; h < g.aaData.length; h++) ea(r, g.aaData[h]);
                        else(r.bDeferLoading || "dom" == P(r)) && Ga(r, k(r.nTBody).children("tr"));
                        r.aiDisplay =
                            r.aiDisplayMaster.slice();
                        r.bInitialised = !0;
                        !1 === n && za(r)
                    };
                    g.bStateSave ? (M.bStateSave = !0, Q(r, "aoDrawCallback", Qa, "state_save"), dc(r, g, f)) : f()
                }
            });
            b = null;
            return this
        },
        L, w, J, rb = {},
        gc = /[\r\n\u2028]/g,
        Ta = /<.*?>/g,
        tc = /^\d{2,4}[\.\/\-]\d{1,2}[\.\/\-]\d{1,2}([T ]{1}\d{1,2}[:\.]\d{2}([\.:]\d{2})?)?$/,
        uc = /(\/|\.|\*|\+|\?|\||\(|\)|\[|\]|\{|\}|\\|\$|\^|\-)/g,
        qb = /['\u00A0,$£€¥%\u2009\u202F\u20BD\u20a9\u20BArfkɃΞ]/gi,
        ca = function(a) {
            return a && !0 !== a && "-" !== a ? !1 : !0
        },
        hc = function(a) {
            var b = parseInt(a, 10);
            return !isNaN(b) &&
                isFinite(a) ? b : null
        },
        ic = function(a, b) {
            rb[b] || (rb[b] = new RegExp(hb(b), "g"));
            return "string" === typeof a && "." !== b ? a.replace(/\./g, "").replace(rb[b], ".") : a
        },
        sb = function(a, b, c) {
            var d = "string" === typeof a;
            if (ca(a)) return !0;
            b && d && (a = ic(a, b));
            c && d && (a = a.replace(qb, ""));
            return !isNaN(parseFloat(a)) && isFinite(a)
        },
        jc = function(a, b, c) {
            return ca(a) ? !0 : ca(a) || "string" === typeof a ? sb(a.replace(Ta, ""), b, c) ? !0 : null : null
        },
        T = function(a, b, c) {
            var d = [],
                e = 0,
                f = a.length;
            if (c !== q)
                for (; e < f; e++) a[e] && a[e][b] && d.push(a[e][b][c]);
            else
                for (; e <
                    f; e++) a[e] && d.push(a[e][b]);
            return d
        },
        Ca = function(a, b, c, d) {
            var e = [],
                f = 0,
                g = b.length;
            if (d !== q)
                for (; f < g; f++) a[b[f]][c] && e.push(a[b[f]][c][d]);
            else
                for (; f < g; f++) e.push(a[b[f]][c]);
            return e
        },
        qa = function(a, b) {
            var c = [];
            if (b === q) {
                b = 0;
                var d = a
            } else d = b, b = a;
            for (a = b; a < d; a++) c.push(a);
            return c
        },
        kc = function(a) {
            for (var b = [], c = 0, d = a.length; c < d; c++) a[c] && b.push(a[c]);
            return b
        },
        Ja = function(a) {
            a: {
                if (!(2 > a.length)) {
                    var b = a.slice().sort();
                    for (var c = b[0], d = 1, e = b.length; d < e; d++) {
                        if (b[d] === c) {
                            b = !1;
                            break a
                        }
                        c = b[d]
                    }
                }
                b = !0
            }
            if (b) return a.slice();
            b = [];e = a.length;
            var f, g = 0;d = 0;a: for (; d < e; d++) {
                c = a[d];
                for (f = 0; f < g; f++)
                    if (b[f] === c) continue a;
                b.push(c);
                g++
            }
            return b
        },
        lc = function(a, b) {
            if (Array.isArray(b))
                for (var c = 0; c < b.length; c++) lc(a, b[c]);
            else a.push(b);
            return a
        };
    Array.isArray || (Array.isArray = function(a) {
        return "[object Array]" === Object.prototype.toString.call(a)
    });
    String.prototype.trim || (String.prototype.trim = function() {
        return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
    });
    u.util = {
        throttle: function(a, b) {
            var c = b !== q ? b : 200,
                d, e;
            return function() {
                var f =
                    this,
                    g = +new Date,
                    h = arguments;
                d && g < d + c ? (clearTimeout(e), e = setTimeout(function() {
                    d = q;
                    a.apply(f, h)
                }, c)) : (d = g, a.apply(f, h))
            }
        },
        escapeRegex: function(a) {
            return a.replace(uc, "\\$1")
        }
    };
    var R = function(a, b, c) {
            a[b] !== q && (a[c] = a[b])
        },
        ua = /\[.*?\]$/,
        oa = /\(\)$/,
        hb = u.util.escapeRegex,
        Oa = k("<div>")[0],
        rc = Oa.textContent !== q,
        sc = /<.*?>/g,
        fb = u.util.throttle,
        mc = [],
        N = Array.prototype,
        vc = function(a) {
            var b, c = u.settings,
                d = k.map(c, function(f, g) {
                    return f.nTable
                });
            if (a) {
                if (a.nTable && a.oApi) return [a];
                if (a.nodeName && "table" === a.nodeName.toLowerCase()) {
                    var e =
                        k.inArray(a, d);
                    return -1 !== e ? [c[e]] : null
                }
                if (a && "function" === typeof a.settings) return a.settings().toArray();
                "string" === typeof a ? b = k(a) : a instanceof k && (b = a)
            } else return [];
            if (b) return b.map(function(f) {
                e = k.inArray(this, d);
                return -1 !== e ? c[e] : null
            }).toArray()
        };
    var D = function(a, b) {
        if (!(this instanceof D)) return new D(a, b);
        var c = [],
            d = function(g) {
                (g = vc(g)) && c.push.apply(c, g)
            };
        if (Array.isArray(a))
            for (var e = 0, f = a.length; e < f; e++) d(a[e]);
        else d(a);
        this.context = Ja(c);
        b && k.merge(this, b);
        this.selector = {
            rows: null,
            cols: null,
            opts: null
        };
        D.extend(this, this, mc)
    };
    u.Api = D;
    k.extend(D.prototype, {
        any: function() {
            return 0 !== this.count()
        },
        concat: N.concat,
        context: [],
        count: function() {
            return this.flatten().length
        },
        each: function(a) {
            for (var b = 0, c = this.length; b < c; b++) a.call(this, this[b], b, this);
            return this
        },
        eq: function(a) {
            var b = this.context;
            return b.length > a ? new D(b[a], this[a]) : null
        },
        filter: function(a) {
            var b = [];
            if (N.filter) b = N.filter.call(this, a, this);
            else
                for (var c = 0, d = this.length; c < d; c++) a.call(this, this[c], c, this) && b.push(this[c]);
            return new D(this.context, b)
        },
        flatten: function() {
            var a = [];
            return new D(this.context, a.concat.apply(a, this.toArray()))
        },
        join: N.join,
        indexOf: N.indexOf || function(a, b) {
            b = b || 0;
            for (var c = this.length; b < c; b++)
                if (this[b] === a) return b;
            return -1
        },
        iterator: function(a, b, c, d) {
            var e = [],
                f, g, h = this.context,
                l, n = this.selector;
            "string" === typeof a && (d = c, c = b, b = a, a = !1);
            var m = 0;
            for (f = h.length; m < f; m++) {
                var p = new D(h[m]);
                if ("table" === b) {
                    var t = c.call(p, h[m], m);
                    t !== q && e.push(t)
                } else if ("columns" === b || "rows" === b) t = c.call(p, h[m],
                    this[m], m), t !== q && e.push(t);
                else if ("column" === b || "column-rows" === b || "row" === b || "cell" === b) {
                    var v = this[m];
                    "column-rows" === b && (l = Ua(h[m], n.opts));
                    var x = 0;
                    for (g = v.length; x < g; x++) t = v[x], t = "cell" === b ? c.call(p, h[m], t.row, t.column, m, x) : c.call(p, h[m], t, m, x, l), t !== q && e.push(t)
                }
            }
            return e.length || d ? (a = new D(h, a ? e.concat.apply([], e) : e), b = a.selector, b.rows = n.rows, b.cols = n.cols, b.opts = n.opts, a) : this
        },
        lastIndexOf: N.lastIndexOf || function(a, b) {
            return this.indexOf.apply(this.toArray.reverse(), arguments)
        },
        length: 0,
        map: function(a) {
            var b = [];
            if (N.map) b = N.map.call(this, a, this);
            else
                for (var c = 0, d = this.length; c < d; c++) b.push(a.call(this, this[c], c));
            return new D(this.context, b)
        },
        pluck: function(a) {
            return this.map(function(b) {
                return b[a]
            })
        },
        pop: N.pop,
        push: N.push,
        reduce: N.reduce || function(a, b) {
            return Bb(this, a, b, 0, this.length, 1)
        },
        reduceRight: N.reduceRight || function(a, b) {
            return Bb(this, a, b, this.length - 1, -1, -1)
        },
        reverse: N.reverse,
        selector: null,
        shift: N.shift,
        slice: function() {
            return new D(this.context, this)
        },
        sort: N.sort,
        splice: N.splice,
        toArray: function() {
            return N.slice.call(this)
        },
        to$: function() {
            return k(this)
        },
        toJQuery: function() {
            return k(this)
        },
        unique: function() {
            return new D(this.context, Ja(this))
        },
        unshift: N.unshift
    });
    D.extend = function(a, b, c) {
        if (c.length && b && (b instanceof D || b.__dt_wrapper)) {
            var d, e = function(h, l, n) {
                return function() {
                    var m = l.apply(h, arguments);
                    D.extend(m, m, n.methodExt);
                    return m
                }
            };
            var f = 0;
            for (d = c.length; f < d; f++) {
                var g = c[f];
                b[g.name] = "function" === g.type ? e(a, g.val, g) : "object" === g.type ? {} : g.val;
                b[g.name].__dt_wrapper = !0;
                D.extend(a, b[g.name], g.propExt)
            }
        }
    };
    D.register = w = function(a, b) {
        if (Array.isArray(a))
            for (var c = 0, d = a.length; c < d; c++) D.register(a[c], b);
        else {
            d = a.split(".");
            var e = mc,
                f;
            a = 0;
            for (c = d.length; a < c; a++) {
                var g = (f = -1 !== d[a].indexOf("()")) ? d[a].replace("()", "") : d[a];
                a: {
                    var h = 0;
                    for (var l = e.length; h < l; h++)
                        if (e[h].name === g) {
                            h = e[h];
                            break a
                        } h = null
                }
                h || (h = {
                    name: g,
                    val: {},
                    methodExt: [],
                    propExt: [],
                    type: "object"
                }, e.push(h));
                a === c - 1 ? (h.val = b, h.type = "function" === typeof b ? "function" : k.isPlainObject(b) ? "object" : "other") : e = f ?
                    h.methodExt : h.propExt
            }
        }
    };
    D.registerPlural = J = function(a, b, c) {
        D.register(a, c);
        D.register(b, function() {
            var d = c.apply(this, arguments);
            return d === this ? this : d instanceof D ? d.length ? Array.isArray(d[0]) ? new D(d.context, d[0]) : d[0] : q : d
        })
    };
    var nc = function(a, b) {
        if (Array.isArray(a)) return k.map(a, function(d) {
            return nc(d, b)
        });
        if ("number" === typeof a) return [b[a]];
        var c = k.map(b, function(d, e) {
            return d.nTable
        });
        return k(c).filter(a).map(function(d) {
            d = k.inArray(this, c);
            return b[d]
        }).toArray()
    };
    w("tables()", function(a) {
        return a !==
            q && null !== a ? new D(nc(a, this.context)) : this
    });
    w("table()", function(a) {
        a = this.tables(a);
        var b = a.context;
        return b.length ? new D(b[0]) : a
    });
    J("tables().nodes()", "table().node()", function() {
        return this.iterator("table", function(a) {
            return a.nTable
        }, 1)
    });
    J("tables().body()", "table().body()", function() {
        return this.iterator("table", function(a) {
            return a.nTBody
        }, 1)
    });
    J("tables().header()", "table().header()", function() {
        return this.iterator("table", function(a) {
            return a.nTHead
        }, 1)
    });
    J("tables().footer()", "table().footer()",
        function() {
            return this.iterator("table", function(a) {
                return a.nTFoot
            }, 1)
        });
    J("tables().containers()", "table().container()", function() {
        return this.iterator("table", function(a) {
            return a.nTableWrapper
        }, 1)
    });
    w("draw()", function(a) {
        return this.iterator("table", function(b) {
            "page" === a ? fa(b) : ("string" === typeof a && (a = "full-hold" === a ? !1 : !0), ja(b, !1 === a))
        })
    });
    w("page()", function(a) {
        return a === q ? this.page.info().page : this.iterator("table", function(b) {
            kb(b, a)
        })
    });
    w("page.info()", function(a) {
        if (0 === this.context.length) return q;
        a = this.context[0];
        var b = a._iDisplayStart,
            c = a.oFeatures.bPaginate ? a._iDisplayLength : -1,
            d = a.fnRecordsDisplay(),
            e = -1 === c;
        return {
            page: e ? 0 : Math.floor(b / c),
            pages: e ? 1 : Math.ceil(d / c),
            start: b,
            end: a.fnDisplayEnd(),
            length: c,
            recordsTotal: a.fnRecordsTotal(),
            recordsDisplay: d,
            serverSide: "ssp" === P(a)
        }
    });
    w("page.len()", function(a) {
        return a === q ? 0 !== this.context.length ? this.context[0]._iDisplayLength : q : this.iterator("table", function(b) {
            ib(b, a)
        })
    });
    var oc = function(a, b, c) {
        if (c) {
            var d = new D(a);
            d.one("draw", function() {
                c(d.ajax.json())
            })
        }
        if ("ssp" ==
            P(a)) ja(a, b);
        else {
            U(a, !0);
            var e = a.jqXHR;
            e && 4 !== e.readyState && e.abort();
            La(a, [], function(f) {
                Ha(a);
                f = Ma(a, f);
                for (var g = 0, h = f.length; g < h; g++) ea(a, f[g]);
                ja(a, b);
                U(a, !1)
            })
        }
    };
    w("ajax.json()", function() {
        var a = this.context;
        if (0 < a.length) return a[0].json
    });
    w("ajax.params()", function() {
        var a = this.context;
        if (0 < a.length) return a[0].oAjaxData
    });
    w("ajax.reload()", function(a, b) {
        return this.iterator("table", function(c) {
            oc(c, !1 === b, a)
        })
    });
    w("ajax.url()", function(a) {
        var b = this.context;
        if (a === q) {
            if (0 === b.length) return q;
            b = b[0];
            return b.ajax ? k.isPlainObject(b.ajax) ? b.ajax.url : b.ajax : b.sAjaxSource
        }
        return this.iterator("table", function(c) {
            k.isPlainObject(c.ajax) ? c.ajax.url = a : c.ajax = a
        })
    });
    w("ajax.url().load()", function(a, b) {
        return this.iterator("table", function(c) {
            oc(c, !1 === b, a)
        })
    });
    var tb = function(a, b, c, d, e) {
            var f = [],
                g, h, l;
            var n = typeof b;
            b && "string" !== n && "function" !== n && b.length !== q || (b = [b]);
            n = 0;
            for (h = b.length; n < h; n++) {
                var m = b[n] && b[n].split && !b[n].match(/[\[\(:]/) ? b[n].split(",") : [b[n]];
                var p = 0;
                for (l = m.length; p < l; p++)(g =
                    c("string" === typeof m[p] ? m[p].trim() : m[p])) && g.length && (f = f.concat(g))
            }
            a = L.selector[a];
            if (a.length)
                for (n = 0, h = a.length; n < h; n++) f = a[n](d, e, f);
            return Ja(f)
        },
        ub = function(a) {
            a || (a = {});
            a.filter && a.search === q && (a.search = a.filter);
            return k.extend({
                search: "none",
                order: "current",
                page: "all"
            }, a)
        },
        vb = function(a) {
            for (var b = 0, c = a.length; b < c; b++)
                if (0 < a[b].length) return a[0] = a[b], a[0].length = 1, a.length = 1, a.context = [a.context[b]], a;
            a.length = 0;
            return a
        },
        Ua = function(a, b) {
            var c = [],
                d = a.aiDisplay;
            var e = a.aiDisplayMaster;
            var f = b.search;
            var g = b.order;
            b = b.page;
            if ("ssp" == P(a)) return "removed" === f ? [] : qa(0, e.length);
            if ("current" == b)
                for (g = a._iDisplayStart, a = a.fnDisplayEnd(); g < a; g++) c.push(d[g]);
            else if ("current" == g || "applied" == g)
                if ("none" == f) c = e.slice();
                else if ("applied" == f) c = d.slice();
            else {
                if ("removed" == f) {
                    var h = {};
                    g = 0;
                    for (a = d.length; g < a; g++) h[d[g]] = null;
                    c = k.map(e, function(l) {
                        return h.hasOwnProperty(l) ? null : l
                    })
                }
            } else if ("index" == g || "original" == g)
                for (g = 0, a = a.aoData.length; g < a; g++) "none" == f ? c.push(g) : (e = k.inArray(g, d), (-1 ===
                    e && "removed" == f || 0 <= e && "applied" == f) && c.push(g));
            return c
        },
        wc = function(a, b, c) {
            var d;
            return tb("row", b, function(e) {
                var f = hc(e),
                    g = a.aoData;
                if (null !== f && !c) return [f];
                d || (d = Ua(a, c));
                if (null !== f && -1 !== k.inArray(f, d)) return [f];
                if (null === e || e === q || "" === e) return d;
                if ("function" === typeof e) return k.map(d, function(l) {
                    var n = g[l];
                    return e(l, n._aData, n.nTr) ? l : null
                });
                if (e.nodeName) {
                    f = e._DT_RowIndex;
                    var h = e._DT_CellIndex;
                    if (f !== q) return g[f] && g[f].nTr === e ? [f] : [];
                    if (h) return g[h.row] && g[h.row].nTr === e.parentNode ? [h.row] : [];
                    f = k(e).closest("*[data-dt-row]");
                    return f.length ? [f.data("dt-row")] : []
                }
                if ("string" === typeof e && "#" === e.charAt(0) && (f = a.aIds[e.replace(/^#/, "")], f !== q)) return [f.idx];
                f = kc(Ca(a.aoData, d, "nTr"));
                return k(f).filter(e).map(function() {
                    return this._DT_RowIndex
                }).toArray()
            }, a, c)
        };
    w("rows()", function(a, b) {
        a === q ? a = "" : k.isPlainObject(a) && (b = a, a = "");
        b = ub(b);
        var c = this.iterator("table", function(d) {
            return wc(d, a, b)
        }, 1);
        c.selector.rows = a;
        c.selector.opts = b;
        return c
    });
    w("rows().nodes()", function() {
        return this.iterator("row",
            function(a, b) {
                return a.aoData[b].nTr || q
            }, 1)
    });
    w("rows().data()", function() {
        return this.iterator(!0, "rows", function(a, b) {
            return Ca(a.aoData, b, "_aData")
        }, 1)
    });
    J("rows().cache()", "row().cache()", function(a) {
        return this.iterator("row", function(b, c) {
            b = b.aoData[c];
            return "search" === a ? b._aFilterData : b._aSortData
        }, 1)
    });
    J("rows().invalidate()", "row().invalidate()", function(a) {
        return this.iterator("row", function(b, c) {
            va(b, c, a)
        })
    });
    J("rows().indexes()", "row().index()", function() {
        return this.iterator("row", function(a,
            b) {
            return b
        }, 1)
    });
    J("rows().ids()", "row().id()", function(a) {
        for (var b = [], c = this.context, d = 0, e = c.length; d < e; d++)
            for (var f = 0, g = this[d].length; f < g; f++) {
                var h = c[d].rowIdFn(c[d].aoData[this[d][f]]._aData);
                b.push((!0 === a ? "#" : "") + h)
            }
        return new D(c, b)
    });
    J("rows().remove()", "row().remove()", function() {
        var a = this;
        this.iterator("row", function(b, c, d) {
            var e = b.aoData,
                f = e[c],
                g, h;
            e.splice(c, 1);
            var l = 0;
            for (g = e.length; l < g; l++) {
                var n = e[l];
                var m = n.anCells;
                null !== n.nTr && (n.nTr._DT_RowIndex = l);
                if (null !== m)
                    for (n = 0, h = m.length; n <
                        h; n++) m[n]._DT_CellIndex.row = l
            }
            Ia(b.aiDisplayMaster, c);
            Ia(b.aiDisplay, c);
            Ia(a[d], c, !1);
            0 < b._iRecordsDisplay && b._iRecordsDisplay--;
            jb(b);
            c = b.rowIdFn(f._aData);
            c !== q && delete b.aIds[c]
        });
        this.iterator("table", function(b) {
            for (var c = 0, d = b.aoData.length; c < d; c++) b.aoData[c].idx = c
        });
        return this
    });
    w("rows.add()", function(a) {
        var b = this.iterator("table", function(d) {
                var e, f = [];
                var g = 0;
                for (e = a.length; g < e; g++) {
                    var h = a[g];
                    h.nodeName && "TR" === h.nodeName.toUpperCase() ? f.push(Ga(d, h)[0]) : f.push(ea(d, h))
                }
                return f
            }, 1),
            c = this.rows(-1);
        c.pop();
        k.merge(c, b);
        return c
    });
    w("row()", function(a, b) {
        return vb(this.rows(a, b))
    });
    w("row().data()", function(a) {
        var b = this.context;
        if (a === q) return b.length && this.length ? b[0].aoData[this[0]]._aData : q;
        var c = b[0].aoData[this[0]];
        c._aData = a;
        Array.isArray(a) && c.nTr && c.nTr.id && da(b[0].rowId)(a, c.nTr.id);
        va(b[0], this[0], "data");
        return this
    });
    w("row().node()", function() {
        var a = this.context;
        return a.length && this.length ? a[0].aoData[this[0]].nTr || null : null
    });
    w("row.add()", function(a) {
        a instanceof
        k && a.length && (a = a[0]);
        var b = this.iterator("table", function(c) {
            return a.nodeName && "TR" === a.nodeName.toUpperCase() ? Ga(c, a)[0] : ea(c, a)
        });
        return this.row(b[0])
    });
    var xc = function(a, b, c, d) {
            var e = [],
                f = function(g, h) {
                    if (Array.isArray(g) || g instanceof k)
                        for (var l = 0, n = g.length; l < n; l++) f(g[l], h);
                    else g.nodeName && "tr" === g.nodeName.toLowerCase() ? e.push(g) : (l = k("<tr><td></td></tr>").addClass(h), k("td", l).addClass(h).html(g)[0].colSpan = na(a), e.push(l[0]))
                };
            f(c, d);
            b._details && b._details.detach();
            b._details = k(e);
            b._detailsShow &&
                b._details.insertAfter(b.nTr)
        },
        wb = function(a, b) {
            var c = a.context;
            c.length && (a = c[0].aoData[b !== q ? b : a[0]]) && a._details && (a._details.remove(), a._detailsShow = q, a._details = q)
        },
        pc = function(a, b) {
            var c = a.context;
            c.length && a.length && (a = c[0].aoData[a[0]], a._details && ((a._detailsShow = b) ? a._details.insertAfter(a.nTr) : a._details.detach(), yc(c[0])))
        },
        yc = function(a) {
            var b = new D(a),
                c = a.aoData;
            b.off("draw.dt.DT_details column-visibility.dt.DT_details destroy.dt.DT_details");
            0 < T(c, "_details").length && (b.on("draw.dt.DT_details",
                function(d, e) {
                    a === e && b.rows({
                        page: "current"
                    }).eq(0).each(function(f) {
                        f = c[f];
                        f._detailsShow && f._details.insertAfter(f.nTr)
                    })
                }), b.on("column-visibility.dt.DT_details", function(d, e, f, g) {
                if (a === e)
                    for (e = na(e), f = 0, g = c.length; f < g; f++) d = c[f], d._details && d._details.children("td[colspan]").attr("colspan", e)
            }), b.on("destroy.dt.DT_details", function(d, e) {
                if (a === e)
                    for (d = 0, e = c.length; d < e; d++) c[d]._details && wb(b, d)
            }))
        };
    w("row().child()", function(a, b) {
        var c = this.context;
        if (a === q) return c.length && this.length ? c[0].aoData[this[0]]._details :
            q;
        !0 === a ? this.child.show() : !1 === a ? wb(this) : c.length && this.length && xc(c[0], c[0].aoData[this[0]], a, b);
        return this
    });
    w(["row().child.show()", "row().child().show()"], function(a) {
        pc(this, !0);
        return this
    });
    w(["row().child.hide()", "row().child().hide()"], function() {
        pc(this, !1);
        return this
    });
    w(["row().child.remove()", "row().child().remove()"], function() {
        wb(this);
        return this
    });
    w("row().child.isShown()", function() {
        var a = this.context;
        return a.length && this.length ? a[0].aoData[this[0]]._detailsShow || !1 : !1
    });
    var zc =
        /^([^:]+):(name|visIdx|visible)$/,
        qc = function(a, b, c, d, e) {
            c = [];
            d = 0;
            for (var f = e.length; d < f; d++) c.push(S(a, e[d], b));
            return c
        },
        Ac = function(a, b, c) {
            var d = a.aoColumns,
                e = T(d, "sName"),
                f = T(d, "nTh");
            return tb("column", b, function(g) {
                var h = hc(g);
                if ("" === g) return qa(d.length);
                if (null !== h) return [0 <= h ? h : d.length + h];
                if ("function" === typeof g) {
                    var l = Ua(a, c);
                    return k.map(d, function(p, t) {
                        return g(t, qc(a, t, 0, 0, l), f[t]) ? t : null
                    })
                }
                var n = "string" === typeof g ? g.match(zc) : "";
                if (n) switch (n[2]) {
                    case "visIdx":
                    case "visible":
                        h = parseInt(n[1],
                            10);
                        if (0 > h) {
                            var m = k.map(d, function(p, t) {
                                return p.bVisible ? t : null
                            });
                            return [m[m.length + h]]
                        }
                        return [sa(a, h)];
                    case "name":
                        return k.map(e, function(p, t) {
                            return p === n[1] ? t : null
                        });
                    default:
                        return []
                }
                if (g.nodeName && g._DT_CellIndex) return [g._DT_CellIndex.column];
                h = k(f).filter(g).map(function() {
                    return k.inArray(this, f)
                }).toArray();
                if (h.length || !g.nodeName) return h;
                h = k(g).closest("*[data-dt-column]");
                return h.length ? [h.data("dt-column")] : []
            }, a, c)
        };
    w("columns()", function(a, b) {
        a === q ? a = "" : k.isPlainObject(a) && (b = a,
            a = "");
        b = ub(b);
        var c = this.iterator("table", function(d) {
            return Ac(d, a, b)
        }, 1);
        c.selector.cols = a;
        c.selector.opts = b;
        return c
    });
    J("columns().header()", "column().header()", function(a, b) {
        return this.iterator("column", function(c, d) {
            return c.aoColumns[d].nTh
        }, 1)
    });
    J("columns().footer()", "column().footer()", function(a, b) {
        return this.iterator("column", function(c, d) {
            return c.aoColumns[d].nTf
        }, 1)
    });
    J("columns().data()", "column().data()", function() {
        return this.iterator("column-rows", qc, 1)
    });
    J("columns().dataSrc()",
        "column().dataSrc()",
        function() {
            return this.iterator("column", function(a, b) {
                return a.aoColumns[b].mData
            }, 1)
        });
    J("columns().cache()", "column().cache()", function(a) {
        return this.iterator("column-rows", function(b, c, d, e, f) {
            return Ca(b.aoData, f, "search" === a ? "_aFilterData" : "_aSortData", c)
        }, 1)
    });
    J("columns().nodes()", "column().nodes()", function() {
        return this.iterator("column-rows", function(a, b, c, d, e) {
            return Ca(a.aoData, e, "anCells", b)
        }, 1)
    });
    J("columns().visible()", "column().visible()", function(a, b) {
        var c =
            this,
            d = this.iterator("column", function(e, f) {
                if (a === q) return e.aoColumns[f].bVisible;
                var g = e.aoColumns,
                    h = g[f],
                    l = e.aoData,
                    n;
                if (a !== q && h.bVisible !== a) {
                    if (a) {
                        var m = k.inArray(!0, T(g, "bVisible"), f + 1);
                        g = 0;
                        for (n = l.length; g < n; g++) {
                            var p = l[g].nTr;
                            e = l[g].anCells;
                            p && p.insertBefore(e[f], e[m] || null)
                        }
                    } else k(T(e.aoData, "anCells", f)).detach();
                    h.bVisible = a
                }
            });
        a !== q && this.iterator("table", function(e) {
            xa(e, e.aoHeader);
            xa(e, e.aoFooter);
            e.aiDisplay.length || k(e.nTBody).find("td[colspan]").attr("colspan", na(e));
            Qa(e);
            c.iterator("column",
                function(f, g) {
                    H(f, null, "column-visibility", [f, g, a, b])
                });
            (b === q || b) && c.columns.adjust()
        });
        return d
    });
    J("columns().indexes()", "column().index()", function(a) {
        return this.iterator("column", function(b, c) {
            return "visible" === a ? ta(b, c) : c
        }, 1)
    });
    w("columns.adjust()", function() {
        return this.iterator("table", function(a) {
            ra(a)
        }, 1)
    });
    w("column.index()", function(a, b) {
        if (0 !== this.context.length) {
            var c = this.context[0];
            if ("fromVisible" === a || "toData" === a) return sa(c, b);
            if ("fromData" === a || "toVisible" === a) return ta(c, b)
        }
    });
    w("column()", function(a, b) {
        return vb(this.columns(a, b))
    });
    var Bc = function(a, b, c) {
        var d = a.aoData,
            e = Ua(a, c),
            f = kc(Ca(d, e, "anCells")),
            g = k(lc([], f)),
            h, l = a.aoColumns.length,
            n, m, p, t, v, x;
        return tb("cell", b, function(r) {
            var A = "function" === typeof r;
            if (null === r || r === q || A) {
                n = [];
                m = 0;
                for (p = e.length; m < p; m++)
                    for (h = e[m], t = 0; t < l; t++) v = {
                        row: h,
                        column: t
                    }, A ? (x = d[h], r(v, S(a, h, t), x.anCells ? x.anCells[t] : null) && n.push(v)) : n.push(v);
                return n
            }
            if (k.isPlainObject(r)) return r.column !== q && r.row !== q && -1 !== k.inArray(r.row, e) ? [r] : [];
            A = g.filter(r).map(function(E, I) {
                return {
                    row: I._DT_CellIndex.row,
                    column: I._DT_CellIndex.column
                }
            }).toArray();
            if (A.length || !r.nodeName) return A;
            x = k(r).closest("*[data-dt-row]");
            return x.length ? [{
                row: x.data("dt-row"),
                column: x.data("dt-column")
            }] : []
        }, a, c)
    };
    w("cells()", function(a, b, c) {
        k.isPlainObject(a) && (a.row === q ? (c = a, a = null) : (c = b, b = null));
        k.isPlainObject(b) && (c = b, b = null);
        if (null === b || b === q) return this.iterator("table", function(m) {
            return Bc(m, a, ub(c))
        });
        var d = c ? {
                page: c.page,
                order: c.order,
                search: c.search
            } : {},
            e = this.columns(b, d),
            f = this.rows(a, d),
            g, h, l, n;
        d = this.iterator("table", function(m, p) {
            m = [];
            g = 0;
            for (h = f[p].length; g < h; g++)
                for (l = 0, n = e[p].length; l < n; l++) m.push({
                    row: f[p][g],
                    column: e[p][l]
                });
            return m
        }, 1);
        d = c && c.selected ? this.cells(d, c) : d;
        k.extend(d.selector, {
            cols: b,
            rows: a,
            opts: c
        });
        return d
    });
    J("cells().nodes()", "cell().node()", function() {
        return this.iterator("cell", function(a, b, c) {
            return (a = a.aoData[b]) && a.anCells ? a.anCells[c] : q
        }, 1)
    });
    w("cells().data()", function() {
        return this.iterator("cell", function(a,
            b, c) {
            return S(a, b, c)
        }, 1)
    });
    J("cells().cache()", "cell().cache()", function(a) {
        a = "search" === a ? "_aFilterData" : "_aSortData";
        return this.iterator("cell", function(b, c, d) {
            return b.aoData[c][a][d]
        }, 1)
    });
    J("cells().render()", "cell().render()", function(a) {
        return this.iterator("cell", function(b, c, d) {
            return S(b, c, d, a)
        }, 1)
    });
    J("cells().indexes()", "cell().index()", function() {
        return this.iterator("cell", function(a, b, c) {
            return {
                row: b,
                column: c,
                columnVisible: ta(a, c)
            }
        }, 1)
    });
    J("cells().invalidate()", "cell().invalidate()",
        function(a) {
            return this.iterator("cell", function(b, c, d) {
                va(b, c, a, d)
            })
        });
    w("cell()", function(a, b, c) {
        return vb(this.cells(a, b, c))
    });
    w("cell().data()", function(a) {
        var b = this.context,
            c = this[0];
        if (a === q) return b.length && c.length ? S(b[0], c[0].row, c[0].column) : q;
        Db(b[0], c[0].row, c[0].column, a);
        va(b[0], c[0].row, "data", c[0].column);
        return this
    });
    w("order()", function(a, b) {
        var c = this.context;
        if (a === q) return 0 !== c.length ? c[0].aaSorting : q;
        "number" === typeof a ? a = [
            [a, b]
        ] : a.length && !Array.isArray(a[0]) && (a = Array.prototype.slice.call(arguments));
        return this.iterator("table", function(d) {
            d.aaSorting = a.slice()
        })
    });
    w("order.listener()", function(a, b, c) {
        return this.iterator("table", function(d) {
            db(d, a, b, c)
        })
    });
    w("order.fixed()", function(a) {
        if (!a) {
            var b = this.context;
            b = b.length ? b[0].aaSortingFixed : q;
            return Array.isArray(b) ? {
                pre: b
            } : b
        }
        return this.iterator("table", function(c) {
            c.aaSortingFixed = k.extend(!0, {}, a)
        })
    });
    w(["columns().order()", "column().order()"], function(a) {
        var b = this;
        return this.iterator("table", function(c, d) {
            var e = [];
            k.each(b[d], function(f,
                g) {
                e.push([g, a])
            });
            c.aaSorting = e
        })
    });
    w("search()", function(a, b, c, d) {
        var e = this.context;
        return a === q ? 0 !== e.length ? e[0].oPreviousSearch.sSearch : q : this.iterator("table", function(f) {
            f.oFeatures.bFilter && ya(f, k.extend({}, f.oPreviousSearch, {
                sSearch: a + "",
                bRegex: null === b ? !1 : b,
                bSmart: null === c ? !0 : c,
                bCaseInsensitive: null === d ? !0 : d
            }), 1)
        })
    });
    J("columns().search()", "column().search()", function(a, b, c, d) {
        return this.iterator("column", function(e, f) {
            var g = e.aoPreSearchCols;
            if (a === q) return g[f].sSearch;
            e.oFeatures.bFilter &&
                (k.extend(g[f], {
                    sSearch: a + "",
                    bRegex: null === b ? !1 : b,
                    bSmart: null === c ? !0 : c,
                    bCaseInsensitive: null === d ? !0 : d
                }), ya(e, e.oPreviousSearch, 1))
        })
    });
    w("state()", function() {
        return this.context.length ? this.context[0].oSavedState : null
    });
    w("state.clear()", function() {
        return this.iterator("table", function(a) {
            a.fnStateSaveCallback.call(a.oInstance, a, {})
        })
    });
    w("state.loaded()", function() {
        return this.context.length ? this.context[0].oLoadedState : null
    });
    w("state.save()", function() {
        return this.iterator("table", function(a) {
            Qa(a)
        })
    });
    u.versionCheck = u.fnVersionCheck = function(a) {
        var b = u.version.split(".");
        a = a.split(".");
        for (var c, d, e = 0, f = a.length; e < f; e++)
            if (c = parseInt(b[e], 10) || 0, d = parseInt(a[e], 10) || 0, c !== d) return c > d;
        return !0
    };
    u.isDataTable = u.fnIsDataTable = function(a) {
        var b = k(a).get(0),
            c = !1;
        if (a instanceof u.Api) return !0;
        k.each(u.settings, function(d, e) {
            d = e.nScrollHead ? k("table", e.nScrollHead)[0] : null;
            var f = e.nScrollFoot ? k("table", e.nScrollFoot)[0] : null;
            if (e.nTable === b || d === b || f === b) c = !0
        });
        return c
    };
    u.tables = u.fnTables = function(a) {
        var b = !1;
        k.isPlainObject(a) && (b = a.api, a = a.visible);
        var c = k.map(u.settings, function(d) {
            if (!a || a && k(d.nTable).is(":visible")) return d.nTable
        });
        return b ? new D(c) : c
    };
    u.camelToHungarian = O;
    w("$()", function(a, b) {
        b = this.rows(b).nodes();
        b = k(b);
        return k([].concat(b.filter(a).toArray(), b.find(a).toArray()))
    });
    k.each(["on", "one", "off"], function(a, b) {
        w(b + "()", function() {
            var c = Array.prototype.slice.call(arguments);
            c[0] = k.map(c[0].split(/\s/), function(e) {
                return e.match(/\.dt\b/) ? e : e + ".dt"
            }).join(" ");
            var d = k(this.tables().nodes());
            d[b].apply(d, c);
            return this
        })
    });
    w("clear()", function() {
        return this.iterator("table", function(a) {
            Ha(a)
        })
    });
    w("settings()", function() {
        return new D(this.context, this.context)
    });
    w("init()", function() {
        var a = this.context;
        return a.length ? a[0].oInit : null
    });
    w("data()", function() {
        return this.iterator("table", function(a) {
            return T(a.aoData, "_aData")
        }).flatten()
    });
    w("destroy()", function(a) {
        a = a || !1;
        return this.iterator("table", function(b) {
            var c = b.nTableWrapper.parentNode,
                d = b.oClasses,
                e = b.nTable,
                f = b.nTBody,
                g = b.nTHead,
                h = b.nTFoot,
                l = k(e);
            f = k(f);
            var n = k(b.nTableWrapper),
                m = k.map(b.aoData, function(t) {
                    return t.nTr
                }),
                p;
            b.bDestroying = !0;
            H(b, "aoDestroyCallback", "destroy", [b]);
            a || (new D(b)).columns().visible(!0);
            n.off(".DT").find(":not(tbody *)").off(".DT");
            k(y).off(".DT-" + b.sInstance);
            e != g.parentNode && (l.children("thead").detach(), l.append(g));
            h && e != h.parentNode && (l.children("tfoot").detach(), l.append(h));
            b.aaSorting = [];
            b.aaSortingFixed = [];
            Pa(b);
            k(m).removeClass(b.asStripeClasses.join(" "));
            k("th, td", g).removeClass(d.sSortable +
                " " + d.sSortableAsc + " " + d.sSortableDesc + " " + d.sSortableNone);
            f.children().detach();
            f.append(m);
            g = a ? "remove" : "detach";
            l[g]();
            n[g]();
            !a && c && (c.insertBefore(e, b.nTableReinsertBefore), l.css("width", b.sDestroyWidth).removeClass(d.sTable), (p = b.asDestroyStripes.length) && f.children().each(function(t) {
                k(this).addClass(b.asDestroyStripes[t % p])
            }));
            c = k.inArray(b, u.settings); - 1 !== c && u.settings.splice(c, 1)
        })
    });
    k.each(["column", "row", "cell"], function(a, b) {
        w(b + "s().every()", function(c) {
            var d = this.selector.opts,
                e =
                this;
            return this.iterator(b, function(f, g, h, l, n) {
                c.call(e[b](g, "cell" === b ? h : d, "cell" === b ? d : q), g, h, l, n)
            })
        })
    });
    w("i18n()", function(a, b, c) {
        var d = this.context[0];
        a = ia(a)(d.oLanguage);
        a === q && (a = b);
        c !== q && k.isPlainObject(a) && (a = a[c] !== q ? a[c] : a._);
        return a.replace("%d", c)
    });
    u.version = "1.10.24";
    u.settings = [];
    u.models = {};
    u.models.oSearch = {
        bCaseInsensitive: !0,
        sSearch: "",
        bRegex: !1,
        bSmart: !0
    };
    u.models.oRow = {
        nTr: null,
        anCells: null,
        _aData: [],
        _aSortData: null,
        _aFilterData: null,
        _sFilterRow: null,
        _sRowStripe: "",
        src: null,
        idx: -1
    };
    u.models.oColumn = {
        idx: null,
        aDataSort: null,
        asSorting: null,
        bSearchable: null,
        bSortable: null,
        bVisible: null,
        _sManualType: null,
        _bAttrSrc: !1,
        fnCreatedCell: null,
        fnGetData: null,
        fnSetData: null,
        mData: null,
        mRender: null,
        nTh: null,
        nTf: null,
        sClass: null,
        sContentPadding: null,
        sDefaultContent: null,
        sName: null,
        sSortDataType: "std",
        sSortingClass: null,
        sSortingClassJUI: null,
        sTitle: null,
        sType: null,
        sWidth: null,
        sWidthOrig: null
    };
    u.defaults = {
        aaData: null,
        aaSorting: [
            [0, "asc"]
        ],
        aaSortingFixed: [],
        ajax: null,
        aLengthMenu: [10,
            25, 50, 100
        ],
        aoColumns: null,
        aoColumnDefs: null,
        aoSearchCols: [],
        asStripeClasses: null,
        bAutoWidth: !0,
        bDeferRender: !1,
        bDestroy: !1,
        bFilter: !0,
        bInfo: !0,
        bLengthChange: !0,
        bPaginate: !0,
        bProcessing: !1,
        bRetrieve: !1,
        bScrollCollapse: !1,
        bServerSide: !1,
        bSort: !0,
        bSortMulti: !0,
        bSortCellsTop: !1,
        bSortClasses: !0,
        bStateSave: !1,
        fnCreatedRow: null,
        fnDrawCallback: null,
        fnFooterCallback: null,
        fnFormatNumber: function(a) {
            return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, this.oLanguage.sThousands)
        },
        fnHeaderCallback: null,
        fnInfoCallback: null,
        fnInitComplete: null,
        fnPreDrawCallback: null,
        fnRowCallback: null,
        fnServerData: null,
        fnServerParams: null,
        fnStateLoadCallback: function(a) {
            try {
                return JSON.parse((-1 === a.iStateDuration ? sessionStorage : localStorage).getItem("DataTables_" + a.sInstance + "_" + location.pathname))
            } catch (b) {
                return {}
            }
        },
        fnStateLoadParams: null,
        fnStateLoaded: null,
        fnStateSaveCallback: function(a, b) {
            try {
                (-1 === a.iStateDuration ? sessionStorage : localStorage).setItem("DataTables_" + a.sInstance + "_" + location.pathname, JSON.stringify(b))
            } catch (c) {}
        },
        fnStateSaveParams: null,
        iStateDuration: 7200,
        iDeferLoading: null,
        iDisplayLength: 10,
        iDisplayStart: 0,
        iTabIndex: 0,
        oClasses: {},
        oLanguage: {
            oAria: {
                sSortAscending: ": activate to sort column ascending",
                sSortDescending: ": activate to sort column descending"
            },
            oPaginate: {
                sFirst: "First",
                sLast: "Last",
                sNext: "Следующая",
                sPrevious: "Предыдущая"
            },
            sEmptyTable: "No data available in table",
            sInfo: "Показано _START_ по _END_ из _TOTAL_ Studentов",
            sInfoEmpty: "Показано с 0 по 0 из 0 Studentов",
            sInfoFiltered: "(Отфильтровано из _MAX_ total Studentов)",
            sInfoPostFix: "",
            sDecimal: "",
            sThousands: ",",
            sLengthMenu: "Показать _MENU_ Studentов",
            sLoadingRecords: "Loading...",
            sProcessing: "Processing...",
            sSearch: "Поиск по рейтингу:",
            sSearchPlaceholder: "",
            sUrl: "",
            sZeroRecords: "No matching records found"
        },
        oSearch: k.extend({}, u.models.oSearch),
        sAjaxDataProp: "data",
        sAjaxSource: null,
        sDom: "lfrtip",
        searchDelay: null,
        sPaginationType: "simple_numbers",
        sScrollX: "",
        sScrollXInner: "",
        sScrollY: "",
        sServerMethod: "GET",
        renderer: null,
        rowId: "DT_RowId"
    };
    G(u.defaults);
    u.defaults.column = {
        aDataSort: null,
        iDataSort: -1,
        asSorting: ["asc", "desc"],
        bSearchable: !0,
        bSortable: !0,
        bVisible: !0,
        fnCreatedCell: null,
        mData: null,
        mRender: null,
        sCellType: "td",
        sClass: "",
        sContentPadding: "",
        sDefaultContent: null,
        sName: "",
        sSortDataType: "std",
        sTitle: null,
        sType: null,
        sWidth: null
    };
    G(u.defaults.column);
    u.models.oSettings = {
        oFeatures: {
            bAutoWidth: null,
            bDeferRender: null,
            bFilter: null,
            bInfo: null,
            bLengthChange: null,
            bPaginate: null,
            bProcessing: null,
            bServerSide: null,
            bSort: null,
            bSortMulti: null,
            bSortClasses: null,
            bStateSave: null
        },
        oScroll: {
            bCollapse: null,
            iBarWidth: 0,
            sX: null,
            sXInner: null,
            sY: null
        },
        oLanguage: {
            fnInfoCallback: null
        },
        oBrowser: {
            bScrollOversize: !1,
            bScrollbarLeft: !1,
            bBounding: !1,
            barWidth: 0
        },
        ajax: null,
        aanFeatures: [],
        aoData: [],
        aiDisplay: [],
        aiDisplayMaster: [],
        aIds: {},
        aoColumns: [],
        aoHeader: [],
        aoFooter: [],
        oPreviousSearch: {},
        aoPreSearchCols: [],
        aaSorting: null,
        aaSortingFixed: [],
        asStripeClasses: null,
        asDestroyStripes: [],
        sDestroyWidth: 0,
        aoRowCallback: [],
        aoHeaderCallback: [],
        aoFooterCallback: [],
        aoDrawCallback: [],
        aoRowCreatedCallback: [],
        aoPreDrawCallback: [],
        aoInitComplete: [],
        aoStateSaveParams: [],
        aoStateLoadParams: [],
        aoStateLoaded: [],
        sTableId: "",
        nTable: null,
        nTHead: null,
        nTFoot: null,
        nTBody: null,
        nTableWrapper: null,
        bDeferLoading: !1,
        bInitialised: !1,
        aoOpenRows: [],
        sDom: null,
        searchDelay: null,
        sPaginationType: "two_button",
        iStateDuration: 0,
        aoStateSave: [],
        aoStateLoad: [],
        oSavedState: null,
        oLoadedState: null,
        sAjaxSource: null,
        sAjaxDataProp: null,
        bAjaxDataGet: !0,
        jqXHR: null,
        json: q,
        oAjaxData: q,
        fnServerData: null,
        aoServerParams: [],
        sServerMethod: null,
        fnFormatNumber: null,
        aLengthMenu: null,
        iDraw: 0,
        bDrawing: !1,
        iDrawError: -1,
        _iDisplayLength: 10,
        _iDisplayStart: 0,
        _iRecordsTotal: 0,
        _iRecordsDisplay: 0,
        oClasses: {},
        bFiltered: !1,
        bSorted: !1,
        bSortCellsTop: null,
        oInit: null,
        aoDestroyCallback: [],
        fnRecordsTotal: function() {
            return "ssp" == P(this) ? 1 * this._iRecordsTotal : this.aiDisplayMaster.length
        },
        fnRecordsDisplay: function() {
            return "ssp" == P(this) ? 1 * this._iRecordsDisplay : this.aiDisplay.length
        },
        fnDisplayEnd: function() {
            var a = this._iDisplayLength,
                b = this._iDisplayStart,
                c = b + a,
                d = this.aiDisplay.length,
                e = this.oFeatures,
                f = e.bPaginate;
            return e.bServerSide ? !1 === f || -1 === a ? b + d : Math.min(b + a, this._iRecordsDisplay) : !f || c > d || -1 === a ? d : c
        },
        oInstance: null,
        sInstance: null,
        iTabIndex: 0,
        nScrollHead: null,
        nScrollFoot: null,
        aLastSort: [],
        oPlugins: {},
        rowIdFn: null,
        rowId: null
    };
    u.ext = L = {
        buttons: {},
        classes: {},
        builder: "-source-",
        errMode: "alert",
        feature: [],
        search: [],
        selector: {
            cell: [],
            column: [],
            row: []
        },
        internal: {},
        legacy: {
            ajax: null
        },
        pager: {},
        renderer: {
            pageButton: {},
            header: {}
        },
        order: {},
        type: {
            detect: [],
            search: {},
            order: {}
        },
        _unique: 0,
        fnVersionCheck: u.fnVersionCheck,
        iApiIndex: 0,
        oJUIClasses: {},
        sVersion: u.version
    };
    k.extend(L, {
        afnFiltering: L.search,
        aTypes: L.type.detect,
        ofnSearch: L.type.search,
        oSort: L.type.order,
        afnSortData: L.order,
        aoFeatures: L.feature,
        oApi: L.internal,
        oStdClasses: L.classes,
        oPagination: L.pager
    });
    k.extend(u.ext.classes, {
        sTable: "dataTable",
        sNoFooter: "no-footer",
        sPageButton: "paginate_button",
        sPageButtonActive: "current",
        sPageButtonDisabled: "disabled",
        sStripeOdd: "odd",
        sStripeEven: "even",
        sRowEmpty: "dataTables_empty",
        sWrapper: "dataTables_wrapper",
        sFilter: "dataTables_filter",
        sInfo: "dataTables_info",
        sPaging: "dataTables_paginate paging_",
        sLength: "dataTables_length",
        sProcessing: "dataTables_processing",
        sSortAsc: "sorting_asc",
        sSortDesc: "sorting_desc",
        sSortable: "sorting",
        sSortableAsc: "sorting_desc_disabled",
        sSortableDesc: "sorting_asc_disabled",
        sSortableNone: "sorting_disabled",
        sSortColumn: "sorting_",
        sFilterInput: "",
        sLengthSelect: "",
        sScrollWrapper: "dataTables_scroll",
        sScrollHead: "dataTables_scrollHead",
        sScrollHeadInner: "dataTables_scrollHeadInner",
        sScrollBody: "dataTables_scrollBody",
        sScrollFoot: "dataTables_scrollFoot",
        sScrollFootInner: "dataTables_scrollFootInner",
        sHeaderTH: "",
        sFooterTH: "",
        sSortJUIAsc: "",
        sSortJUIDesc: "",
        sSortJUI: "",
        sSortJUIAscAllowed: "",
        sSortJUIDescAllowed: "",
        sSortJUIWrapper: "",
        sSortIcon: "",
        sJUIHeader: "",
        sJUIFooter: ""
    });
    var ec = u.ext.pager;
    k.extend(ec, {
        simple: function(a, b) {
            return ["previous", "next"]
        },
        full: function(a, b) {
            return ["first", "previous", "next", "last"]
        },
        numbers: function(a, b) {
            return [Ba(a, b)]
        },
        simple_numbers: function(a, b) {
            return ["previous", Ba(a, b), "next"]
        },
        full_numbers: function(a, b) {
            return ["first", "previous", Ba(a, b), "next", "last"]
        },
        first_last_numbers: function(a, b) {
            return ["first", Ba(a, b), "last"]
        },
        _numbers: Ba,
        numbers_length: 7
    });
    k.extend(!0, u.ext.renderer, {
        pageButton: {
            _: function(a, b, c, d, e, f) {
                var g = a.oClasses,
                    h = a.oLanguage.oPaginate,
                    l = a.oLanguage.oAria.paginate || {},
                    n, m, p = 0,
                    t = function(x, r) {
                        var A, E = g.sPageButtonDisabled,
                            I = function(B) {
                                kb(a, B.data.action, !0)
                            };
                        var W = 0;
                        for (A = r.length; W < A; W++) {
                            var M = r[W];
                            if (Array.isArray(M)) {
                                var C = k("<" + (M.DT_el || "div") + "/>").appendTo(x);
                                t(C, M)
                            } else {
                                n = null;
                                m = M;
                                C = a.iTabIndex;
                                switch (M) {
                                    case "ellipsis":
                                        x.append('<span class="ellipsis">&#x2026;</span>');
                                        break;
                                    case "first":
                                        n = h.sFirst;
                                        0 === e && (C = -1, m += " " + E);
                                        break;
                                    case "previous":
                                        n = h.sPrevious;
                                        0 === e && (C = -1, m += " " + E);
                                        break;
                                    case "next":
                                        n = h.sNext;
                                        if (0 === f || e === f - 1) C = -1, m += " " + E;
                                        break;
                                    case "last":
                                        n = h.sLast;
                                        if (0 === f || e === f - 1) C = -1, m += " " + E;
                                        break;
                                    default:
                                        n = a.fnFormatNumber(M + 1), m = e === M ? g.sPageButtonActive : ""
                                }
                                null !== n && (C = k("<a>", {
                                    "class": g.sPageButton + " " + m,
                                    "aria-controls": a.sTableId,
                                    "aria-label": l[M],
                                    "data-dt-idx": p,
                                    tabindex: C,
                                    id: 0 === c && "string" === typeof M ? a.sTableId + "_" + M : null
                                }).html(n).appendTo(x), ob(C, {
                                    action: M
                                }, I), p++)
                            }
                        }
                    };
                try {
                    var v = k(b).find(z.activeElement).data("dt-idx")
                } catch (x) {}
                t(k(b).empty(), d);
                v !== q && k(b).find("[data-dt-idx=" + v + "]").trigger("focus")
            }
        }
    });
    k.extend(u.ext.type.detect, [function(a, b) {
        b = b.oLanguage.sDecimal;
        return sb(a, b) ? "num" + b : null
    }, function(a, b) {
        if (a && !(a instanceof Date) && !tc.test(a)) return null;
        b = Date.parse(a);
        return null !== b && !isNaN(b) || ca(a) ? "date" : null
    }, function(a,
        b) {
        b = b.oLanguage.sDecimal;
        return sb(a, b, !0) ? "num-fmt" + b : null
    }, function(a, b) {
        b = b.oLanguage.sDecimal;
        return jc(a, b) ? "html-num" + b : null
    }, function(a, b) {
        b = b.oLanguage.sDecimal;
        return jc(a, b, !0) ? "html-num-fmt" + b : null
    }, function(a, b) {
        return ca(a) || "string" === typeof a && -1 !== a.indexOf("<") ? "html" : null
    }]);
    k.extend(u.ext.type.search, {
        html: function(a) {
            return ca(a) ? a : "string" === typeof a ? a.replace(gc, " ").replace(Ta, "") : ""
        },
        string: function(a) {
            return ca(a) ? a : "string" === typeof a ? a.replace(gc, " ") : a
        }
    });
    var Sa = function(a,
        b, c, d) {
        if (0 !== a && (!a || "-" === a)) return -Infinity;
        b && (a = ic(a, b));
        a.replace && (c && (a = a.replace(c, "")), d && (a = a.replace(d, "")));
        return 1 * a
    };
    k.extend(L.type.order, {
        "date-pre": function(a) {
            a = Date.parse(a);
            return isNaN(a) ? -Infinity : a
        },
        "html-pre": function(a) {
            return ca(a) ? "" : a.replace ? a.replace(/<.*?>/g, "").toLowerCase() : a + ""
        },
        "string-pre": function(a) {
            return ca(a) ? "" : "string" === typeof a ? a.toLowerCase() : a.toString ? a.toString() : ""
        },
        "string-asc": function(a, b) {
            return a < b ? -1 : a > b ? 1 : 0
        },
        "string-desc": function(a, b) {
            return a <
                b ? 1 : a > b ? -1 : 0
        }
    });
    Va("");
    k.extend(!0, u.ext.renderer, {
        header: {
            _: function(a, b, c, d) {
                k(a.nTable).on("order.dt.DT", function(e, f, g, h) {
                    a === f && (e = c.idx, b.removeClass(d.sSortAsc + " " + d.sSortDesc).addClass("asc" == h[e] ? d.sSortAsc : "desc" == h[e] ? d.sSortDesc : c.sSortingClass))
                })
            },
            jqueryui: function(a, b, c, d) {
                k("<div/>").addClass(d.sSortJUIWrapper).append(b.contents()).append(k("<span/>").addClass(d.sSortIcon + " " + c.sSortingClassJUI)).appendTo(b);
                k(a.nTable).on("order.dt.DT", function(e, f, g, h) {
                    a === f && (e = c.idx, b.removeClass(d.sSortAsc +
                        " " + d.sSortDesc).addClass("asc" == h[e] ? d.sSortAsc : "desc" == h[e] ? d.sSortDesc : c.sSortingClass), b.find("span." + d.sSortIcon).removeClass(d.sSortJUIAsc + " " + d.sSortJUIDesc + " " + d.sSortJUI + " " + d.sSortJUIAscAllowed + " " + d.sSortJUIDescAllowed).addClass("asc" == h[e] ? d.sSortJUIAsc : "desc" == h[e] ? d.sSortJUIDesc : c.sSortingClassJUI))
                })
            }
        }
    });
    var xb = function(a) {
        return "string" === typeof a ? a.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;") : a
    };
    u.render = {
        number: function(a, b, c, d, e) {
            return {
                display: function(f) {
                    if ("number" !==
                        typeof f && "string" !== typeof f) return f;
                    var g = 0 > f ? "-" : "",
                        h = parseFloat(f);
                    if (isNaN(h)) return xb(f);
                    h = h.toFixed(c);
                    f = Math.abs(h);
                    h = parseInt(f, 10);
                    f = c ? b + (f - h).toFixed(c).substring(2) : "";
                    return g + (d || "") + h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, a) + f + (e || "")
                }
            }
        },
        text: function() {
            return {
                display: xb,
                filter: xb
            }
        }
    };
    k.extend(u.ext.internal, {
        _fnExternApiFunc: fc,
        _fnBuildAjax: La,
        _fnAjaxUpdate: Fb,
        _fnAjaxParameters: Ob,
        _fnAjaxUpdateDraw: Pb,
        _fnAjaxDataSrc: Ma,
        _fnAddColumn: Wa,
        _fnColumnOptions: Da,
        _fnAdjustColumnSizing: ra,
        _fnVisibleToColumnIndex: sa,
        _fnColumnIndexToVisible: ta,
        _fnVisbleColumns: na,
        _fnGetColumns: Fa,
        _fnColumnTypes: Ya,
        _fnApplyColumnDefs: Cb,
        _fnHungarianMap: G,
        _fnCamelToHungarian: O,
        _fnLanguageCompat: ma,
        _fnBrowserDetect: Ab,
        _fnAddData: ea,
        _fnAddTr: Ga,
        _fnNodeToDataIndex: function(a, b) {
            return b._DT_RowIndex !== q ? b._DT_RowIndex : null
        },
        _fnNodeToColumnIndex: function(a, b, c) {
            return k.inArray(c, a.aoData[b].anCells)
        },
        _fnGetCellData: S,
        _fnSetCellData: Db,
        _fnSplitObjNotation: ab,
        _fnGetObjectDataFn: ia,
        _fnSetObjectDataFn: da,
        _fnGetDataMaster: bb,
        _fnClearTable: Ha,
        _fnDeleteIndex: Ia,
        _fnInvalidate: va,
        _fnGetRowElements: $a,
        _fnCreateTr: Za,
        _fnBuildHead: Eb,
        _fnDrawHead: xa,
        _fnDraw: fa,
        _fnReDraw: ja,
        _fnAddOptionsHtml: Hb,
        _fnDetectHeader: wa,
        _fnGetUniqueThs: Ka,
        _fnFeatureHtmlFilter: Jb,
        _fnFilterComplete: ya,
        _fnFilterCustom: Sb,
        _fnFilterColumn: Rb,
        _fnFilter: Qb,
        _fnFilterCreateSearch: gb,
        _fnEscapeRegex: hb,
        _fnFilterData: Tb,
        _fnFeatureHtmlInfo: Mb,
        _fnUpdateInfo: Wb,
        _fnInfoMacros: Xb,
        _fnInitialise: za,
        _fnInitComplete: Na,
        _fnLengthChange: ib,
        _fnFeatureHtmlLength: Ib,
        _fnFeatureHtmlPaginate: Nb,
        _fnPageChange: kb,
        _fnFeatureHtmlProcessing: Kb,
        _fnProcessingDisplay: U,
        _fnFeatureHtmlTable: Lb,
        _fnScrollDraw: Ea,
        _fnApplyToChildren: Z,
        _fnCalculateColumnWidths: Xa,
        _fnThrottle: fb,
        _fnConvertToWidth: Zb,
        _fnGetWidestNode: $b,
        _fnGetMaxLenString: ac,
        _fnStringToCss: K,
        _fnSortFlatten: pa,
        _fnSort: Gb,
        _fnSortAria: cc,
        _fnSortListener: nb,
        _fnSortAttachListener: db,
        _fnSortingClasses: Pa,
        _fnSortData: bc,
        _fnSaveState: Qa,
        _fnLoadState: dc,
        _fnSettingsFromNode: Ra,
        _fnLog: aa,
        _fnMap: V,
        _fnBindAction: ob,
        _fnCallbackReg: Q,
        _fnCallbackFire: H,
        _fnLengthOverflow: jb,
        _fnRenderer: eb,
        _fnDataSource: P,
        _fnRowAttributes: cb,
        _fnExtend: pb,
        _fnCalculateEnd: function() {}
    });
    k.fn.dataTable = u;
    u.$ = k;
    k.fn.dataTableSettings = u.settings;
    k.fn.dataTableExt = u.ext;
    k.fn.DataTable = function(a) {
        return k(this).dataTable(a).api()
    };
    k.each(u, function(a, b) {
        k.fn.DataTable[a] = b
    });
    return k.fn.dataTable
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example2').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>

<script type="text/javascript">
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>