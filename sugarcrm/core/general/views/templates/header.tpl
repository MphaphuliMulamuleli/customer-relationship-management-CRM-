<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/bootstrap.css" rel="stylesheet"/>
        <link href="/css/style.css" rel="stylesheet"/>
        <style>
            body {
                background: #e3e3e3;
            }

            #logo {
                float: right;
            }

            #logo::after {
                display: inline;
                content: ' Test #v2';
            }
        </style>
    </head>
    <body>
        <div class="clearfix content-header">
            <span id="logo">
                <svg width="93px" height="32px" viewBox="0 0 93 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="TG-logo" transform="translate(-76.000000, -39.000000)" fill="#1d1d1d">
                            <path d="M101.043525,39.2697635 L101.043525,46.2811108 L92.6214463,46.2811108 L92.6214463,70.7303828 L84.4220788,70.7303828 L84.4220788,46.2811108 L76,46.2811108 L76,39.2697635 L101.043525,39.2697635 Z M116.247653,39.269727 L106.0752,70.6767727 L98.8506312,70.6767727 L108.988274,39.269727 L116.247653,39.269727 Z M158.736969,47.6536049 L160.050713,47.6536049 C160.488066,47.6536049 160.837008,47.536739 161.09742,47.3017924 C161.356989,47.0675746 161.487436,46.7571875 161.487436,46.3701451 C161.487436,45.9561336 161.364096,45.639065 161.117776,45.4178458 C160.871457,45.1971126 160.515528,45.0865638 160.050713,45.0865638 L158.736969,45.0865638 L158.736969,47.6536049 Z M160.173692,43.1820867 C161.29556,43.1820867 162.19845,43.4720648 162.883086,44.0514136 C163.56712,44.6311269 163.909317,45.4044828 163.909317,46.3701451 C163.909317,46.9775563 163.758514,47.5158441 163.457872,47.9850085 C163.156266,48.4545373 162.719034,48.8274878 162.144128,49.102645 L164.032778,52.6223499 L161.446243,52.6223499 L159.845106,49.6409328 L158.736969,49.6409328 L158.736969,52.6223499 L156.396753,52.6223499 L156.396753,43.1820867 L160.173692,43.1820867 Z M165.797967,44.4446516 C165.195719,43.3827754 164.367507,42.5474635 163.314175,41.9400524 C162.260362,41.3330056 161.103563,41.0289356 159.845106,41.0289356 C158.586166,41.0289356 157.443581,41.3330056 156.417591,41.9400524 C155.39136,42.5474635 154.576278,43.3827754 153.974873,44.4446516 C153.372625,45.5078642 153.0715,46.6880641 153.0715,47.9850085 C153.0715,49.2547408 153.372625,50.4072428 153.974873,51.4422714 C154.576278,52.4774216 155.39136,53.299006 156.417591,53.9059312 C157.443581,54.5133424 158.586166,54.8166835 159.845106,54.8166835 C161.103563,54.8166835 162.260362,54.5133424 163.314175,53.9059312 C164.367507,53.299006 165.195719,52.4707401 165.797967,51.4213765 C166.399372,50.3728633 166.700978,49.2136798 166.700978,47.9434615 C166.700978,46.6742151 166.399372,45.5078642 165.797967,44.4446516 L165.797967,44.4446516 Z M151.963364,43.409623 C152.784108,42.0435552 153.892606,40.9668582 155.288255,40.1801392 C156.684267,39.3934202 158.203136,39.0000607 159.845106,39.0000607 C161.514537,39.0000607 163.0475,39.3934202 164.44315,40.1801392 C165.839161,40.9668582 166.947297,42.0435552 167.768403,43.409623 C168.589628,44.7760552 169,46.2736882 169,47.9020361 C169,49.5584464 168.589628,51.0694425 167.768403,52.4359961 C166.947297,53.8020639 165.839161,54.8786395 164.44315,55.6653585 C163.0475,56.4520774 161.514537,56.8455584 159.845106,56.8455584 C158.203136,56.8455584 156.684267,56.4520774 155.288255,55.6653585 C153.892606,54.8786395 152.784108,53.8020639 151.963364,52.4359961 C151.142138,51.0694425 150.731766,49.5726598 150.731766,47.9434615 C150.731766,46.2875372 151.142138,44.7760552 151.963364,43.409623 L151.963364,43.409623 Z M143.9813,44.7755085 C142.778369,42.9629935 141.158804,41.5474825 139.124168,40.528368 C137.088931,39.5102254 134.779189,39 132.194942,39 C128.956413,39 126.149214,39.6594056 123.772863,40.9776093 C121.395308,42.2964205 119.576158,44.1538839 118.313725,46.5507284 C117.050931,48.9480589 116.420257,51.7642601 116.420257,55.000061 C116.420257,58.2068276 117.035995,61.0156184 118.269159,63.4270408 C119.50184,65.8393136 121.247517,67.7046733 123.505465,69.0223911 C125.76245,70.3410808 128.37693,71 131.348181,71 C133.248877,71 134.919874,70.6853615 136.361174,70.0560835 C137.801752,69.42717 138.983001,68.5436296 139.90408,67.4044907 L140.795046,70.7303099 L146.23154,70.7303099 L146.23154,53.0224516 L131.793604,53.0224516 L131.793604,59.3145026 L138.700788,59.3145026 L138.700788,59.3594511 C138.255365,61.0674913 137.400896,62.2966486 136.138584,63.0451006 C134.875669,63.7944031 133.516275,64.1686898 132.060882,64.1686898 C129.744033,64.1686898 127.95367,63.3370225 126.691599,61.6740521 C125.428323,60.0110818 124.797528,57.7866205 124.797528,55.000061 C124.797528,52.2739996 125.436032,50.0639947 126.713762,48.3710183 C127.990528,46.6786492 129.744033,45.8317966 131.97211,45.8317966 C133.605528,45.8317966 134.942398,46.3033906 135.982601,47.2474291 C136.833096,48.0194487 137.440885,49.0011466 137.81464,50.1846266 L146.002203,50.1846266 C145.715052,48.17774 145.042581,46.3747007 143.9813,44.7755085"></path>
                        </g>
                    </g>
                </svg>
            </span>
        </div>
        <div class="content-body">