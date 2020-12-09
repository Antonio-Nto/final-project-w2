    <?php 
        function get_CURL($url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            curl_close($curl);
        
            return json_decode($result, true);
        }

        $indonesia = get_CURL('https://api.kawalcorona.com/indonesia/');
    ?>
    
    <!-- Display Container -->
    <div class="jumbotron jumbotron-fluid display-container" id='containerGejala'>
        <div class="container">
            <div class="row">
                <div class="col xl5 l5 s12">
                    <p class='p-1'>COVID SYMPTOMS</p>
                    <h1 class='h-1'>Gejala Covid</h1>
                    <p id='contentHeader'>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa perlu dirawat di rumah sakit. Orang dengan gejala ringan yang dinyatakan sehat harus melakukan perawatan mandiri di rumah. Rata-rata gejala akan muncul 5–6 hari setelah seseorang pertama kali terinfeksi virus ini, tetapi bisa juga 14 hari setelah terinfeksi.</p>
                </div>
                <div class="col xl7 l7 s12 img-header">
                    <img src="<?= $this->config->base_url()?>assets/img/Symptoms/gejala.png" alt="header" class='img-1' id='gejalaImg'>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Display Container -->

    <!-- Statistik Coronavirus -->
    <div class="container">
        <div class="contentStatistik">
            <div>
                <h2>Statistik Coronavirus</h2>
                <p>Data Pantauan COVID-19 Indonesia 21 Januari 2020 sampai hari ini</p>
            </div>
        </div>
        <div class="row">
            <div class="col xl3 lg3 sm12 statistikCard">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDU2IDU2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJQYWdlLTEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgaWQ9IjAwMi0tLVZpcnVzIiBmaWxsPSJyZ2IoMCwwLDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xKSI+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTggMjljLS41NTIyODQ3IDAtMSAuNDQ3NzE1My0xIDFzLjQ0NzcxNTMgMSAxIDEgMS0uNDQ3NzE1MyAxLTEtLjQ0NzcxNTMtMS0xLTF6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNDIuOTUyIDQ4Ljc1N2MtLjY5NDg4NzctLjM0MDUxNzktMS4yNjY4OTEyLS44ODg0MTEzLTEuNjM3LTEuNTY4LS41NDYtMS4wNzItMS4zLTIuNjM3LTIuMDQ1LTQuNDE5LS44MjU1NTUuNTc2ODMwNy0xLjY5ODMxODcgMS4wODI5NjAxLTIuNjA5IDEuNTEzIDEuMjkzIDEuNjg5IDIuMzExIDMuMjIxIDIuODQ4IDQuMDYxLjM4MjI3NDMuNjEzOTYyNy41NTQ2MDA1IDEuMzM1NTU2NS40OTEgMi4wNTYtLjA0OTU0ODEuODUyOTg4LjQ0ODI0OSAxLjY0MzI0NzQgMS4yMzg5OTQ5IDEuOTY2OTIwOC43OTA3NDU4LjMyMzY3MzMgMS42OTk3NzkzLjEwOTI2NzEgMi4yNjI1NDQxLS41MzM2NDc1LjU2Mjc2NDctLjY0MjkxNDcuNjU0OTU2NC0xLjU3MjMyOTkuMjI5NDYxLTIuMzEzMjczMy0uMTgxNzM3NS0uMzIzMzA1MS0uNDUxOTkzNC0uNTg4MDEwMy0uNzc5LS43NjN6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTYuNjM2IDQ3LjI3M2MtLjM0MDEwMzkuNjM2NTMyOS0uODc3NzM4NiAxLjE0NTM5MDgtMS41MzIgMS40NS0uNzYyODY2NS4zODM5NTItMS4xOTc3NTY4IDEuMjA5OTUwMy0xLjA4MjU4OTIgMi4wNTYxODk1LjExNTE2NzcuODQ2MjM5Mi43NTQ5Nzg4IDEuNTI1OTc3NyAxLjU5MjcwNjcgMS42OTIwOTkzczEuNjg4NTA5MS0uMjE4MDMyMiAyLjExNzg4MjUtLjk1NjI4ODhjLjE4NzIwMjItLjMxOTI4ODQuMjgwMTIzLS42ODUwNzczLjI2OC0xLjA1NS0uMDUyNDg3OC0uNzcxNTg3MS4xMzYyMjIxLTEuNTQwNDA1NC41NC0yLjIuNjU2LTEuMDExIDEuNjM0LTIuNDUgMi44LTMuOTgtLjkxMTU5MDQtLjQyOTE4ODEtMS43ODU2NDM3LS45MzM5NTE0LTIuNjEzLTEuNTA5LS43NjEgMS44NDUtMS41MzQgMy40MjktMi4wOTEgNC41MDJ6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMTUuMDQ5IDcuMjQ0Yy42OTQ1MjI3LjM0MDIwNDc2IDEuMjY2MjAxNS44ODc3NzI0MSAxLjYzNiAxLjU2Ny41NDcgMS4wNzIgMS4zIDIuNjM4IDIuMDQ1IDQuNDIxLjgyNjQ4NDMtLjU3NjQ3MjkgMS42OTk4ODE0LTEuMDgyNTgxNiAyLjYxMS0xLjUxMy0xLjIxNi0xLjU4Ni0yLjItMy4wNDctMi44NS00LjA2My0uMzgxMDY5NC0uNjEyMjQ3NDItLjU1MzM1MDctMS4zMzE1NDgwNy0uNDkxLTIuMDUuMDQ5OTQxNi0uODUzMDYzNTgtLjQ0NzYxNTEtMS42NDM2MjEwMy0xLjIzODM0ODEtMS45Njc1ODUzOS0uNzkwNzMzLS4zMjM5NjQzNS0xLjY5OTk0MTgtLjEwOTc2MDUyLTIuMjYyODkxNi41MzMxMjI5NC0uNTYyOTQ5OC42NDI4ODM0Ny0uNjU1MjY1MyAxLjU3MjQxMTEtLjIyOTc2MDMgMi4zMTM0NjI0NS4xODMwOTI0LjMyMTU5MzkyLjQ1MzUzMDEuNTg0NzUwNi43OC43NTl6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNDEuMzY0IDguNzI3Yy4zNDE1NDIxLS42MzY4NTkwMy44ODA1Mzk0LTEuMTQ1Njc4MDkgMS41MzYtMS40NS43NjM0MzMtLjM4MzQ4MDc2IDEuMTk4OTg0Mi0xLjIwOTU1MDc3IDEuMDg0MTA3My0yLjA1NjEyNjY0LS4xMTQ4NzctLjg0NjU3NTg3LS43NTQ4MTM2LTEuNTI2NzA2NDgtMS41OTI4MzIxLTEuNjkyODc2NjgtLjgzODAxODQtLjE2NjE3MDItMS42ODkwNTcyLjIxODMxNTcyLTIuMTE4Mjc1Mi45NTcwMDMzMi0uMTg4OTQ5NC4zMTg3Njg2OC0uMjgzNjEyNS42ODQ1OTExNC0uMjczIDEuMDU1LjA1MjQ4NzguNzcxNTg3MS0uMTM2MjIyMSAxLjU0MDQwNTM4LS41NCAyLjItLjY1NiAxLjAxMS0xLjYzNCAyLjQ1LTIuOCAzLjk4LjkxMTU5MDQuNDI5MTg4MSAxLjc4NTY0MzcuOTMzOTUxNCAyLjYxMyAxLjUwOS43NjEtMS44NDUgMS41MzQtMy40MjkgMi4wOTEtNC41MDJ6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PGNpcmNsZSBpZD0iT3ZhbCIgY3g9IjI1Ljk5OSIgY3k9IjIyIiByPSIzIiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L2NpcmNsZT48cGF0aCBpZD0iU2hhcGUiIGQ9Im0xMS4wNjUgMjkuNTA4Yy0uMDQxLS41LS4wNjQtMS0uMDY0LTEuNTA4cy4wMjItMS4wMDguMDYzLTEuNTA2Yy0xLjk3OC4yNTktMy43MzMuMzgxLTQuOTM3LjQzNS0uNzIwNzM4MjMuMDIzMTM4NS0xLjQyOTY0NzQ2LS4xODczMjQ0LTIuMDIxLS42LS44MzIwOTc5NS0uNTcyMDI1OS0xLjk2MDA3MDg3LS40MzQwNzgtMi42Mjk3OTI0NC4zMjE2MTYxLS42Njk3MjE1Ni43NTU2OTQyLS42NzEwOTczNSAxLjg5MjA3MDMtLjAwMzIwNzU2IDIuNjQ5MzgzOS42NTA0MjkuNzM0NzEwNCAxLjcyOTk4OTg4LjkwNjExNTkgMi41NzYuNDA5LjY0MjQ5Njk1LS40Mjk5ODQzIDEuNDAyMTA3NTEtLjY1MTA1NzIgMi4xNzUtLjYzMyAxLjIwMS4wNTggMi45MzMuMTg0IDQuODQxLjQzMnoiIGZpbGw9IiM2ZjQyYzIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48Y2lyY2xlIGlkPSJPdmFsIiBjeD0iMzYuOTk5IiBjeT0iMjUiIHI9IjEiIGZpbGw9IiM2ZjQyYzIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvY2lyY2xlPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTU2LjUyNyAyNi43MDVjLS42NTA4MzA2LS43MzM5NzgyLTEuNzI5ODM0OS0uOTA1Mjk1My0yLjU3Ni0uNDA5LS42NDEyOC40MzI1ODY4LTEuNDAxNzM3OS42NTM5MDYzLTIuMTc1LjYzMy0xLjItLjA2My0yLjkzMy0uMTg5LTQuODQxLS40MzcuMDQzMzMzMy40OTg2NjY3LjA2NSAxLjAwMTMzMzMuMDY1IDEuNTA4IDAgLjUwNi0uMDIzIDEuMDA4LS4wNjQgMS41MDcgMi4xMDktLjI3NSAzLjk0My0uMzkxIDQuOTM4LS40MzYuNzIwNTM0Ny0uMDIxNTY2OCAxLjQyODk2MDQuMTg4NzUyNiAyLjAyMS42LjgzMTE2ODQuNTYzMzgxNiAxLjk1MTIyMjQuNDIzMTQyIDIuNjE3ODMwNC0uMzI3NzczMS42NjY2MDgxLS43NTA5MTUxLjY3MzA5ODUtMS44Nzk2OTU4LjAxNTE2OTYtMi42MzgyMjY5eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTUyLjUxNSAzOS4yNjRjLS4zMjU2MTQ4LS4xOTI4NDIxLS43MDExMzI2LS4yODQ3MjA0LTEuMDc5LS4yNjQtLjc1ODYxNzEuMDU0MjgxMi0xLjUxNDk3OTgtLjEzMjYyMi0yLjE2MS0uNTM0LTEuNTg0LTEuMDI0LTMuMDgzLTIuMDg4LTQuNDU0LTMuMTY0LS42NjM1NjM3LS41Mjk1MDM5LS45MjI5MTExLTEuNDE4ODA5NS0uNjQ4LTIuMjIyIDEuMDk5OTctMy4yOTY2NjY0IDEuMDk5OTctNi44NjEzMzM2IDAtMTAuMTU4LS4yNzY2MzkzLS44MDQwNjQzLS4wMTcxMDY4LTEuNjk1MjA2MS42NDgtMi4yMjUgMS43ODUtMS40IDMuNDQtMi41MTYgNC41MTQtMy4yMDcuNjE3NDI3Ni0uMzgxODc2NyAxLjM0MTgyNjItLjU1Mzc2NzkgMi4wNjUtLjQ5LjUyNjM5NDkuMDI0NDE0NSAxLjA0MjAwNjgtLjE1NDYxNzQgMS40NC0uNS41OTY5NTI1LS41MzA0MzExLjgyMTE1NDEtMS4zNjUxMzI0LjU3MDMxNTQtMi4xMjMyODExLS4yNTA4Mzg4LS43NTgxNDg3LS45Mjg2MzUzLTEuMjk0NDE3Ni0xLjcyNDE1MjktMS4zNjQxNDA0LS43OTU1MTc2LS4wNjk3MjI3LTEuNTU2MjY2LjM0MDQ2NTctMS45MzUxNjI1IDEuMDQzNDIxNS0uMzM3NjQyMS42ODc0Nzk1LS44NzkzMTE0IDEuMjUzOTQ0Ny0xLjU1MSAxLjYyMi0xLjAzMy41MjQtMy41MzQgMS42MjYtNC45MzQgMi4yMzYtLjc5ODk3MjkuMzQyNzU3My0xLjcyNzgwNTguMTMxNTQ4OC0yLjMtLjUyMy0yLjI5MjI4MzMtMi41OTEzOTkyLTUuMzY1MTQ5My00LjM2NzAyNzktOC43NTUtNS4wNTktLjg1NzQ0Ni0uMTYzODc2LTEuNTA5NTQyMi0uODY0OTUwMi0xLjYxMS0xLjczMi0uMTc2LTEuNTUzLS40NzktNC4zMzEtLjUzMi01LjQ4OC0uMDIwMDIwMy0uNzEzODA4NDUuMTkwMzYzNy0xLjQxNTA4ODUxLjYtMiAuNDcxNTUzMy0uNzEyNzg1MDUuNDM4MDc3Ny0xLjY0NjQ0MzI1LS4wODMzMTE5LTIuMzIzNjI3MS0uNTIxMzg5NS0uNjc3MTgzODUtMS40MTU0NjQ1LS45NDgyMzM4Ni0yLjIyNTExNS0uNjc0NTcxNDItLjgwOTY1MDUuMjczNjYyNDMtMS4zNTU5NDE1IDEuMDMxNTU3MTUtMS4zNTk1NzMxIDEuODg2MTk4NTItLjAwMjE0NTkuMzcyMDY5OTYuMTAxOTI5LjczNzAyNjEzLjMgMS4wNTIuNDMxOTA3Ni42MzY5MTYwMy42NTIwMDc4IDEuMzkzNzk0NjcuNjI5IDIuMTYzLS4wNTkgMS4xNDgtLjM1OCAzLjg2Ni0uNTMxIDUuMzg0LS4xMDE2NjE0Ljg2NDc4NDMtLjc1MTE0OTIgMS41NjQ0MTk0LTEuNjA2IDEuNzMtMy4zOTA4MjQyLjY5Mjg2NzItNi40NjQ1NzMyIDIuNDY5MDk5Ny04Ljc1OCA1LjA2MS0uNTcwMDU5Ny42NTQ0MTI1LTEuNDk3MTIwNS44NjY0ODUyLTIuMjk1LjUyNS0xLjQyOC0uNjItMy45NzgtMS43NDEtNS4wMS0yLjI3OS0uNjM3MzgyNTMtLjM0MTQ4OTktMS4xNDY4NTc4OS0uODgwNDM5MS0xLjQ1Mi0xLjUzNi0uMzA0NTAwOTEtLjU5MTEyMzUtLjg4MDkwMjU0LS45OTQwNzgtMS41NDA2NDgwMS0xLjA3NzA0NnMtMS4zMTc5NzA2Ny4xNjQ3MjI5LTEuNzU5MzUxOTkuNjYyMDQ2Yy0uMzk0ODk2MDguNDUxNTM4NC0uNTY2MjY3MjYgMS4wNTY0ODMyLS40NjY4NjU3NCAxLjY0ODA0ODIuMDk5NDAxNTMuNTkxNTY1LjQ1OTA3ODI4IDEuMTA3Mjc3Ljk3OTg2NTc0IDEuNDA0OTUxOC4zMjQ5NDgyNy4xODk4MDguNjk4MTUwMTEuMjgwODQ5OCAxLjA3NC4yNjIuNzU4ODEyMzItLjA1NjU4MTMgMS41MTU4Nzg0Mi4xMzA0OTU3IDIuMTYxLjUzNCAxLjU4OCAxLjAyNyAzLjA4NyAyLjA5MSA0LjQ1MyAzLjE2My42NjQ5MTIuNTMwMzc2OC45MjQwMjIzIDEuNDIxODQ0NS42NDcgMi4yMjYtMS4wOTkzMDI4IDMuMjk1NzQ4NC0xLjA5OTMwMjggNi44NTkyNTE2IDAgMTAuMTU1LjI3NjE2Ny44MDM3NzA3LjAxNjY3ODYgMS42OTQzNjA1LS42NDggMi4yMjQtMS43ODggMS40LTMuNDQyIDIuNTE4LTQuNTE1IDMuMjA4LS42MTcxODg3MS4zNzk3ODA5LTEuMzM5OTQwODUuNTUxNTMxLTIuMDYyLjQ5LS41MjY4NzAxMi0uMDI1NjEyNi0xLjA0MzIyNzM2LjE1MzU1MzctMS40NDEuNS0uNzY2NzA4MzIuNjc5OTI3Ny0uODk1NDQ5ODYgMS44MjkzNjYzLS4yOTgxNjE3MiAyLjY2MjA2NjguNTk3Mjg4MTQuODMyNzAwNiAxLjcyNzMzNzQxIDEuMDc5MjIwNSAyLjYxNzE2MTcyLjU3MDkzMzIuMzI2NTYwNTEtLjE4NDMxMzUuNTkzNjk5ODMtLjQ1ODA0NDYuNzctLjc4OS4zMzc5MDU1OS0uNjg3NjI1OC44Nzk5Mzk5OS0xLjI1NDEwNzYgMS41NTItMS42MjIgMS4wMzMtLjUyNCAzLjUzNC0xLjYyNiA0LjkzNC0yLjIzNi4yNDkwNTQ1LS4xMDc5MzA3LjUxNzU2NDctLjE2Mzc0MjcuNzg5LS4xNjQuNTc5NDQ3OS4wMDE3NDY1IDEuMTMwMzMwNC4yNTE4ODI5IDEuNTEzLjY4NyAyLjI5MjQ0NTYgMi41OTE4OTc5IDUuMzY1Njg2MyA0LjM2Nzg5MTIgOC43NTYgNS4wNi44NTU5NTI1LjE2NDkyMzEgMS41MDY1MDA2Ljg2NTIzMzIgMS42MDggMS43MzEuMTc2IDEuNTQ3LjQ3OCA0LjMxNy41MzIgNS40ODIuMDE5Njg3MS43MTYyNDg3LS4xOTA1ODc2IDEuNDE5OTY4Mi0uNiAyLjAwOC0uNDcxNjk1MS43MTI5ODg4LS40MzgwNTcgMS42NDY5NTQ1LjA4MzcwNzkgMi4zMjQxNjI1LjUyMTc2NDkuNjc3MjA3OSAxLjQxNjI3NDkuOTQ3OTAyMSAyLjIyNTk3NzQuNjczNjE5MXMxLjM1NTU0MTgtMS4wMzI4ODg5IDEuMzU4MzE0Ny0xLjg4Nzc4MTZjLjAwMjU4MzItLjM3Mjc1NjctLjEwMTUxMTEtLjczODQ3NDUtLjMtMS4wNTQtLjQzMTkxNzEtLjYzNDk5MS0uNjUxNzUwMy0xLjM5MDQwNTEtLjYyOC0yLjE1OC4wNzYtMS40Ny4yNDUtMy43MjYuNjE4LTYuMTM2LjA1OTY1OTYtLjQzODkxNTkuMzk4ODY0NS0uNzg3NDUzLjgzNi0uODU5IDMuNjUzOTg3Ni0uNTc1Njc1NyA2Ljk5MjU2Ni0yLjQwODM1NzIgOS40NC01LjE4Mi41NzA4NDExLS42NTY2ODEyIDEuNTAwNzU1My0uODY4OTQ0MiAyLjMtLjUyNSAxLjQzMy42MjIgMy45ODggMS43NDYgNS4wMDkgMi4yNzkuNjM2MDQzMS4zNDE1MTA2IDEuMTQ0MTM5MS44ODAxMzQ1IDEuNDQ4IDEuNTM1LjMwNDAzMTYuNTkzMTEyOC44ODE1NTUxLjk5NzYyODIgMS41NDI4NTg4IDEuMDgwNjY2NC42NjEzMDM4LjA4MzAzODEgMS4zMjA5MDkxLS4xNjYxMzQ0IDEuNzYyMTQxMi0uNjY1NjY2NC4zOTQ4OTYxLS40NTE1Mzg0LjU2NjI2NzMtMS4wNTY0ODMyLjQ2Njg2NTctMS42NDgwNDgyLS4wOTk0MDE1LS41OTE1NjUtLjQ1OTA3ODItMS4xMDcyNzctLjk3OTg2NTctMS40MDQ5NTE4em0tMzQuNTE1LTYuMjY0Yy0xLjY1Njg1NDIgMC0zLTEuMzQzMTQ1OC0zLTNzMS4zNDMxNDU4LTMgMy0zIDMgMS4zNDMxNDU4IDMgMy0xLjM0MzE0NTggMy0zIDN6bTMtMTFjMC0yLjc2MTQyMzcgMi4yMzg1NzYzLTUgNS01czUgMi4yMzg1NzYzIDUgNS0yLjIzODU3NjMgNS01IDVjLTIuNzYwMDUzMi0uMDAzMzA2MS00Ljk5NjY5MzktMi4yMzk5NDY4LTUtNXptOSAxOWMtMy4zMTM3MDg1IDAtNi0yLjY4NjI5MTUtNi02czIuNjg2MjkxNS02IDYtNiA2IDIuNjg2MjkxNSA2IDZjLS4wMDMzMDc0IDMuMzEyMzM3Ni0yLjY4NzY2MjQgNS45OTY2OTI2LTYgNnptNy0xM2MtMS42NTY4NTQyIDAtMy0xLjM0MzE0NTgtMy0zczEuMzQzMTQ1OC0zIDMtMyAzIDEuMzQzMTQ1OCAzIDMtMS4zNDMxNDU4IDMtMyAzeiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTMwIDMxYy0yLjIwOTEzOSAwLTQgMS43OTA4NjEtNCA0czEuNzkwODYxIDQgNCA0IDQtMS43OTA4NjEgNC00LTEuNzkwODYxLTQtNC00eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==" />
                <h3><?= $indonesia[0]['positif']; ?></h3>
                <p>Positif</p>
            </div>
            <div class="col xl3 lg3 sm12 statistikCard">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUwNS44NjUgNTA1Ljg2NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iWE1MSURfMTYxMF8iPjxwYXRoIGlkPSJYTUxJRF8xNjE5XyIgZD0ibTI0My4xMTMgMjMxLjQ0N2MwLTI4LjE5OS0yMi45NDItNTEuMTQyLTUxLjE0Mi01MS4xNDJzLTUxLjE0MiAyMi45NDItNTEuMTQyIDUxLjE0MiAyMi45NDIgNTEuMTQxIDUxLjE0MiA1MS4xNDEgNTEuMTQyLTIyLjk0MiA1MS4xNDItNTEuMTQxem0tNTEuMTQyIDIxLjE0MWMtMTEuNjU3IDAtMjEuMTQyLTkuNDgzLTIxLjE0Mi0yMS4xNDFzOS40ODQtMjEuMTQyIDIxLjE0Mi0yMS4xNDIgMjEuMTQyIDkuNDg0IDIxLjE0MiAyMS4xNDItOS40ODUgMjEuMTQxLTIxLjE0MiAyMS4xNDF6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggaWQ9IlhNTElEXzE2MjJfIiBkPSJtMzE0LjgzMiAxODAuMzA2Yy0yOC4xOTkgMC01MS4xNDIgMjIuOTQyLTUxLjE0MiA1MS4xNDJzMjIuOTQyIDUxLjE0MSA1MS4xNDIgNTEuMTQxIDUxLjE0Mi0yMi45NDEgNTEuMTQyLTUxLjE0MS0yMi45NDMtNTEuMTQyLTUxLjE0Mi01MS4xNDJ6bTAgNzIuMjgyYy0xMS42NTcgMC0yMS4xNDItOS40ODMtMjEuMTQyLTIxLjE0MXM5LjQ4NC0yMS4xNDIgMjEuMTQyLTIxLjE0MiAyMS4xNDIgOS40ODQgMjEuMTQyIDIxLjE0Mi05LjQ4NSAyMS4xNDEtMjEuMTQyIDIxLjE0MXoiIGZpbGw9IiM2ZjQyYzIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBpZD0iWE1MSURfMTYyM18iIGQ9Im0yMTguNjI4IDMwOC42OTMgMTMuODM0IDI2LjYyIDIwLjk0LTEwLjg4MiAyMC45MzggMTAuODgyIDEzLjgzNC0yNi42Mi0zNC43NzItMTguMDcxeiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGlkPSJYTUxJRF8xNjI2XyIgZD0ibTQ1NS4wNjcgMzYzLjA4MWMtOC40NDEtLjEyMS0xNi41OTkgMS44MjUtMjMuOTI0IDUuNTU0bC0zOC42NDMtMzguNjQyYzE3Ljk2Ny0yMi4yMDUgMjcuOTIxLTQ5LjkzNiAyNy45MjEtNzkuMTgxdi00Ny4wMDVjMC0xNi4xOC0zLjA2Ni0zMS42NTYtOC42NDEtNDUuODg0bDIwLjI0OC0yMC4yNDdjMTkuMjI1IDkuMzIgNDIuOTIxIDUuODk3IDU4Ljc2Ny05Ljk0NyA5LjcxNS05LjcxNSAxNS4wNjUtMjIuNjMyIDE1LjA2NS0zNi4zNyAwLTEzLjc0LTUuMzUyLTI2LjY1NS0xNS4wNTktMzYuMzU1LTcuMjAzLTcuMjEzLTE2LjIxLTEyLjAxNi0yNS45MjUtMTQuMDE3LTIuMDAzLTkuNzEzLTYuODAyLTE4LjcyLTE0LjAwMy0yNS45MjEtOS43MTQtOS43MTUtMjIuNjMxLTE1LjA2Ni0zNi4zNy0xNS4wNjYtMTMuNzQgMC0yNi42NTUgNS4zNTItMzYuMzYyIDE1LjA2NS05LjU0NyA5LjU0Ny0xNC44OTUgMjIuMjM3LTE1LjA1OSAzNS43MzMtLjEwMyA4LjQzMiAxLjgyNCAxNi42IDUuNTUzIDIzLjkyM2wtMTYuODQyIDE2Ljg0M2MtMTcuMjUyLTguODc0LTM2LjgwMi0xMy44ODgtNTcuNTAxLTEzLjg4OGgtODEuNzhjLTIwLjk0NiAwLTQwLjcxMiA1LjEzOS01OC4xMTQgMTQuMjEybC0xNy4xNjgtMTcuMTY3YzMuNzI5LTcuMzIzIDUuNjU1LTE1LjQ5IDUuNTUzLTIzLjkyMi0uMTY0LTEzLjQ5Ni01LjUxMi0yNi4xODctMTUuMDU1LTM1LjcyOS05LjcxMS05LjcxOC0yMi42MjYtMTUuMDctMzYuMzY2LTE1LjA3LTEzLjczOCAwLTI2LjY1NSA1LjM1LTM2LjM3MiAxNS4wNjUtNy4yIDcuMjAxLTExLjk5NyAxNi4yMDktMTQuMDAxIDI1LjkyMS05LjcxMiAyLjAwMS0xOC43MTggNi44MDEtMjUuOTE0IDE0LjAwNi05LjcxOCA5LjcxMS0xNS4wNyAyMi42MjYtMTUuMDcgMzYuMzY2IDAgMTMuNzM4IDUuMzUxIDI2LjY1NSAxNS4wNjUgMzYuMzcgMTUuODQ2IDE1Ljg0NyAzOS41MzkgMTkuMjY5IDU4Ljc2NyA5Ljk0NmwyMC45MjcgMjAuOTI3Yy01LjQwOSAxNC4wNDEtOC4zODMgMjkuMjgxLTguMzgzIDQ1LjIwNHY0Ny4wMDVjMCAyOS4wMTcgOS44MDMgNTYuNTQxIDI3LjUwNSA3OC42NTdsLTM5LjE2NiAzOS4xNjVjLTcuMzI2LTMuNzI4LTE1LjUxNS01LjY3LTIzLjkyNC01LjU1My0xMy41LjE2Mi0yNi4xODkgNS41MS0zNS43MjkgMTUuMDU1LTkuNzE1IDkuNzE2LTE1LjA2NCAyMi42MzItMTUuMDY0IDM2LjM3IDAgMTMuNzQgNS4zNTIgMjYuNjU1IDE1LjA2IDM2LjM1NyA3LjIwMyA3LjIxMSAxNi4yMTIgMTIuMDE0IDI1LjkyNCAxNC4wMTUgMi4wMDQgOS43MTMgNi44MDIgMTguNzIxIDE0LjAwMiAyNS45MjEgOS43MTYgOS43MTYgMjIuNjMyIDE1LjA2NiAzNi4zNzEgMTUuMDY2IDEzLjc0IDAgMjYuNjU1LTUuMzUyIDM2LjM1OC0xNS4wNjMgMTUuODU0LTE1Ljg0MyAxOS4yODEtMzkuNTQ1IDkuOTU5LTU4Ljc3OGw2Ljc0Mi02Ljc0MmM2LjUwNiA0Ljc2IDE0LjUxNyA3LjU4IDIzLjE3NyA3LjU4aDE3MS42MDZjOC40MiAwIDE2LjIyNC0yLjY2OCAyMi42My03LjE5bDYuMzUyIDYuMzUyYy05LjMyMyAxOS4yMzMtNS44OTYgNDIuOTM0IDkuOTUxIDU4Ljc3MSA5LjcxMSA5LjcxOCAyMi42MjYgMTUuMDcgMzYuMzY2IDE1LjA3IDEzLjczOSAwIDI2LjY1NS01LjM1MSAzNi4zNy0xNS4wNjUgNy4yMDEtNy4yMDEgMTItMTYuMjA4IDE0LjAwMy0yNS45MjEgOS43MTItMi4wMDEgMTguNzE5LTYuODAyIDI1LjkxNS0xNC4wMDYgOS43MTctOS43MTIgMTUuMDY4LTIyLjYyNyAxNS4wNjgtMzYuMzY3IDAtMTMuNzM4LTUuMzUtMjYuNjU0LTE1LjA2Mi0zNi4zNjYtOS41MzktOS41NDctMjIuMjI5LTE0Ljg5NS0zNS43MjgtMTUuMDU3em0tNDYuMDQ3LTI4Ni4zMTgtMTAuMDY1LTEwLjZjLTguMDUzLTguNDgtNy44NzctMjEuNjA3LjQwMy0yOS44ODkgNC4wNDQtNC4wNDYgOS40MjMtNi4yNzQgMTUuMTQ2LTYuMjc0IDUuNzI2IDAgMTEuMTA4IDIuMjI5IDE1LjE1NyA2LjI3OCA0LjU2NyA0LjU2NyA2LjgxMyAxMC44ODcgNi4xNjMgMTcuMzM4bC0xLjg0NiAxOC4yOSAxOC4yODgtMS44NjFjNi40MzUtLjY1NSAxMi43NDYgMS41ODkgMTcuMzE5IDYuMTY4IDQuMDQ2IDQuMDQ0IDYuMjc0IDkuNDIzIDYuMjc0IDE1LjE0NiAwIDUuNzI2LTIuMjI5IDExLjEwOC02LjI3OCAxNS4xNTctOC4wNjkgOC4wNjgtMjEuMDE3IDguNDA5LTI5LjQ3Ny43NzlsLTEwLjU3OS05LjU0My0zMi42OTQgMzIuNjkzYy01LjczMS03Ljk4OC0xMi4zNy0xNS4yODEtMTkuNzY2LTIxLjcyOHptLTMzMi42OCAyMC45ODktMTAuNTc5IDkuNTQyYy04LjQ2NCA3LjYzNC0yMS40MTEgNy4yODgtMjkuNDc4LS43NzgtNC4wNDktNC4wNDktNi4yNzgtOS40MzItNi4yNzgtMTUuMTU3IDAtNS43MjMgMi4yMjktMTEuMTAyIDYuMjg1LTE1LjE1NSA0LjU2Mi00LjU2OCAxMC44NTktNi44MTkgMTcuMzA5LTYuMTU4bDE4LjI4NyAxLjg2LTEuODQ0LTE4LjI4OGMtLjY1MS02LjQ1MiAxLjU5NS0xMi43NzIgNi4xNjEtMTcuMzM4IDQuMDQ5LTQuMDUxIDkuNDMzLTYuMjggMTUuMTU5LTYuMjggNS43MjMgMCAxMS4xMDIgMi4yMjkgMTUuMTQ5IDYuMjc4IDguMjc2IDguMjc3IDguNDUyIDIxLjQwNC4zOTkgMjkuODg1bC0xMC4wNjUgMTAuNiAzMi4zOTYgMzIuMzk2Yy03LjM2NCA2LjQ4Ni0xMy45NzEgMTMuODEyLTE5LjY2MiAyMS44MzJ6bTMwLjk1NiAzNDIuMzQ0YzcuNjM0IDguNDY5IDcuMjkgMjEuNDItLjc4OSAyOS40OTQtNC4wNDQgNC4wNDctOS40MjMgNi4yNzUtMTUuMTQ2IDYuMjc1LTUuNzI2IDAtMTEuMTA4LTIuMjMtMTUuMTU4LTYuMjc5LTQuNTY2LTQuNTY2LTYuODEzLTEwLjg4Ny02LjE2MS0xNy4zMzlsMS44NDQtMTguMjktMTguMjg4IDEuODYyYy02LjQ0Ny42NTUtMTIuNzQ1LTEuNTktMTcuMzE3LTYuMTY3LTQuMDQ3LTQuMDQ0LTYuMjc1LTkuNDIzLTYuMjc1LTE1LjE0NiAwLTUuNzI1IDIuMjI5LTExLjEwOCA2LjI4Mi0xNS4xNjEgOC4yNjYtOC4yNzEgMjEuMzk0LTguNDQyIDI5Ljg5LS4zODhsMTAuNTk5IDEwLjA1IDUxLjQ4MS01MS40ODF2MzUuOTk2YzAgMS43NDcuMTI2IDMuNDYzLjM0OCA1LjE1bC0zMC44NDYgMzAuODQ2em0yNDEuMjQ5LTQ2LjU3NWMwIDUuMTUtNC4xOSA5LjM0MS05LjM0MSA5LjM0MWgtMTcuNjI2di0yNC42MDdjMC04LjI4NC02LjcxNi0xNS0xNS0xNXMtMTUgNi43MTYtMTUgMTV2MjQuNjA3aC0yMy4xNzd2LTI0LjYwN2MwLTguMjg0LTYuNzE2LTE1LTE1LTE1cy0xNSA2LjcxNi0xNSAxNXYyNC42MDdoLTIzLjE3N3YtMjQuNjA3YzAtOC4yODQtNi43MTYtMTUtMTUtMTVzLTE1IDYuNzE2LTE1IDE1djI0LjYwN2gtMTcuNjI3Yy01LjE1IDAtOS4zNDEtNC4xOS05LjM0MS05LjM0MXYtNjMuMDIxbC01LjY0NS00LjUwNGMtMjMuMDI0LTE4LjM3My0zNi4yMy00NS43NzYtMzYuMjMtNzUuMTg1di00Ny4wMDVjMC01My4wMDYgNDMuMTIzLTk2LjEzIDk2LjEyOS05Ni4xM2g4MS43OGM1My4wMDYgMCA5Ni4xMyA0My4xMjQgOTYuMTMgOTYuMTN2NDcuMDA1YzAgMjkuNDA4LTEzLjIwNiA1Ni44MTItMzYuMjMxIDc1LjE4NWwtNS42NDUgNC41MDR2NjMuMDIxem0xMjEuMDMgMzYuMTQxYy00LjU2MiA0LjU2OC0xMC44NjEgNi44MTgtMTcuMzA4IDYuMTU3bC0xOC4yODktMS44NjIgMS44NDYgMTguMjkxYy42NSA2LjQ1MS0xLjU5NiAxMi43NzEtNi4xNjQgMTcuMzM4LTQuMDQ5IDQuMDUtOS40MzEgNi4yNzktMTUuMTU2IDYuMjc5LTUuNzIzIDAtMTEuMTAyLTIuMjI5LTE1LjE1My02LjI4My04LjA3MS04LjA2Ni04LjQxNS0yMS4wMTgtLjc4MS0yOS40ODZsOS41MzYtMTAuNTc4LTMwLjAxMy0zMC4wMTRjLjI5OS0xLjk1MS40NTQtMy45NDkuNDU0LTUuOTgydi0zNS4wNThsNTAuNTQ0IDUwLjU0MyAxMC41OTktMTAuMDVjOC40OTUtOC4wNTMgMjEuNjI0LTcuODgzIDI5Ljg5My4zOTIgNC4wNSA0LjA0OSA2LjI3OSA5LjQzMyA2LjI3OSAxNS4xNTctLjAwMiA1LjcyMy0yLjIzMSAxMS4xMDItNi4yODcgMTUuMTU2eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+" alt="meninggal">
                <h3><?= $indonesia[0]['meninggal']; ?></h3>
                <p>Meninggal</p>
            </div>
            <div class="col xl3 lg3 sm12 statistikCard">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY0IDY0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im02MCA0NS42MnYtMjguNjJjMC0yLjc1Ny0yLjI0My01LTUtNWgtNXYtNWMwLTIuNzU3LTIuMjQzLTUtNS01aC0xMmMtMi43NTcgMC01IDIuMjQzLTUgNXY1aC01Yy0yLjc1NyAwLTUgMi4yNDMtNSA1djMwLjU4NmwtLjQxNC40MTRoLTUuNTg2di0xYzAtLjU1My0uNDQ4LTEtMS0xaC04Yy0uNTUyIDAtMSAuNDQ3LTEgMXYxNGMwIC41NTMuNDQ4IDEgMSAxaDhjLjU1MiAwIDEtLjQ0NyAxLTFoMzNjLjE3MiAwIC4zNDEtLjA0NC40OS0uMTI5bDE0LjM5Mi04LjA5NWMxLjMwNi0uNzM1IDIuMTE4LTIuMTIyIDIuMTE4LTMuNjIxcy0uODA2LTIuODA0LTItMy41MzV6bS01MCAxNC4zOGgtNnYtMTJoNnptMjAtNTNjMC0xLjY1NCAxLjM0Ni0zIDMtM2gxMmMxLjY1NCAwIDMgMS4zNDYgMyAzdjVoLTJ2LTVjMC0uNTUzLS40NDgtMS0xLTFoLTEyYy0uNTUyIDAtMSAuNDQ3LTEgMXY1aC0yem00IDV2LTRoMTB2NHptLTE0IDVjMC0xLjY1NCAxLjM0Ni0zIDMtM2gzMmMxLjY1NCAwIDMgMS4zNDYgMyAzdjI4LjAxNmMtLjA1My0uMDAyLS4xMDItLjAxNi0uMTU1LS4wMTZoLS4xNTJjLS41OTggMC0xLjIuMTMyLTEuNzQxLjM4MmwtMTIuMTcyIDUuNjE4aC00LjU0MmMuNDgtLjcxNi43NjItMS41NzUuNzYyLTIuNSAwLTIuNDgxLTIuMDE5LTQuNS00LjUtNC41aC0xMy41Yy0uMjY1IDAtLjUyLjEwNS0uNzA3LjI5M2wtMS4yOTMgMS4yOTN6bTM4LjkwMSAzNC4wMzMtMTQuMTYzIDcuOTY3aC0zMi43Mzh2LTloNmMuMjY1IDAgLjUyLS4xMDUuNzA3LS4yOTNsMy43MDctMy43MDdoMTMuMDg2YzEuMzc4IDAgMi41IDEuMTIxIDIuNSAyLjVzLTEuMTIyIDIuNS0yLjUgMi41aC04LjV2Mmg4LjUgOC41Yy4xNDUgMCAuMjg4LS4wMzEuNDE5LS4wOTJsMTIuMzcyLTUuNzExYy4yNzktLjEyOS41OTEtLjE5Ny45MDItLjE5N2guMTUyYzEuMTg4IDAgMi4xNTUuOTY3IDIuMTU1IDIuMTU1IDAgLjc3OC0uNDIxIDEuNDk2LTEuMDk5IDEuODc4eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTM5IDQyYzYuNjE3IDAgMTItNS4zODMgMTItMTJzLTUuMzgzLTEyLTEyLTEyLTEyIDUuMzgzLTEyIDEyIDUuMzgzIDEyIDEyIDEyem0wLTIyYzUuNTE0IDAgMTAgNC40ODYgMTAgMTBzLTQuNDg2IDEwLTEwIDEwLTEwLTQuNDg2LTEwLTEwIDQuNDg2LTEwIDEwLTEweiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTMzIDMzaDN2M2MwIC41NTMuNDQ4IDEgMSAxaDRjLjU1MiAwIDEtLjQ0NyAxLTF2LTNoM2MuNTUyIDAgMS0uNDQ3IDEtMXYtNGMwLS41NTMtLjQ0OC0xLTEtMWgtM3YtM2MwLS41NTMtLjQ0OC0xLTEtMWgtNGMtLjU1MiAwLTEgLjQ0Ny0xIDF2M2gtM2MtLjU1MiAwLTEgLjQ0Ny0xIDF2NGMwIC41NTMuNDQ4IDEgMSAxem0xLTRoM2MuNTUyIDAgMS0uNDQ3IDEtMXYtM2gydjNjMCAuNTUzLjQ0OCAxIDEgMWgzdjJoLTNjLS41NTIgMC0xIC40NDctMSAxdjNoLTJ2LTNjMC0uNTUzLS40NDgtMS0xLTFoLTN6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                <h3><?= $indonesia[0]['dirawat']; ?></h3>
                <p>Dirawat</p>
            </div>
            <div class="col xl3 lg3 sm12 statistikCard">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQzOC44OTEgNDM4Ljg5MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTM0Ny45NjgsNTcuNTAzaC0zOS43MDZWMzkuNzRjMC01Ljc0Ny02LjI2OS04LjM1OS0xMi4wMTYtOC4zNTloLTMwLjgyNGMtNy4zMTQtMjAuODk4LTI1LjYtMzEuMzQ3LTQ2LjQ5OC0zMS4zNDcgICAgIGMtMjAuNjY4LTAuNzc3LTM5LjQ2NywxMS44OTYtNDYuNDk4LDMxLjM0N2gtMzAuMzAyYy01Ljc0NywwLTExLjQ5NCwyLjYxMi0xMS40OTQsOC4zNTl2MTcuNzYzSDkwLjkyMyAgICAgYy0yMy41MywwLjI1MS00Mi43OCwxOC44MTMtNDMuODg2LDQyLjMxOHYyOTkuMzYzYzAsMjIuOTg4LDIwLjg5OCwzOS43MDYsNDMuODg2LDM5LjcwNmgyNTcuMDQ1ICAgICBjMjIuOTg4LDAsNDMuODg2LTE2LjcxOCw0My44ODYtMzkuNzA2Vjk5LjgyMkMzOTAuNzQ4LDc2LjMxNiwzNzEuNDk4LDU3Ljc1NCwzNDcuOTY4LDU3LjUwM3ogTTE1MS41MjcsNTIuMjc5aDI4LjczNSAgICAgYzUuMDE2LTAuNjEyLDkuMDQ1LTQuNDI4LDkuOTI3LTkuNDA0YzMuMDk0LTEzLjQ3NCwxNC45MTUtMjMuMTQ2LDI4LjczNS0yMy41MWMxMy42OTIsMC40MTUsMjUuMzM1LDEwLjExNywyOC4yMTIsMjMuNTEgICAgIGMwLjkzNyw1LjE0OCw1LjIzMiw5LjAxMywxMC40NDksOS40MDRoMjkuNzh2NDEuNzk2SDE1MS41MjdWNTIuMjc5eiBNMzcwLjk1NiwzOTkuMTg1YzAsMTEuNDk0LTExLjQ5NCwxOC44MDgtMjIuOTg4LDE4LjgwOCAgICAgSDkwLjkyM2MtMTEuNDk0LDAtMjIuOTg4LTcuMzE0LTIyLjk4OC0xOC44MDhWOTkuODIyYzEuMDY2LTExLjk2NCwxMC45NzgtMjEuMjAxLDIyLjk4OC0yMS40MmgzOS43MDZ2MjYuNjQ1ICAgICBjMC41NTIsNS44NTQsNS42MjIsMTAuMjMzLDExLjQ5NCw5LjkyN2gxNTQuMTIyYzUuOTgsMC4zMjcsMTEuMjA5LTMuOTkyLDEyLjAxNi05LjkyN1Y3OC40MDFoMzkuNzA2ICAgICBjMTIuMDA5LDAuMjIsMjEuOTIyLDkuNDU2LDIyLjk4OCwyMS40MlYzOTkuMTg1eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCQk8cGF0aCBkPSJNMTc5LjIxNywyMzMuNTY5Yy0zLjkxOS00LjEzMS0xMC40MjUtNC4zNjQtMTQuNjI5LTAuNTIybC0zMy40MzcsMzEuODY5bC0xNC4xMDYtMTQuNjI5ICAgICBjLTMuOTE5LTQuMTMxLTEwLjQyNS00LjM2My0xNC42MjktMC41MjJjLTQuMDQ3LDQuMjQtNC4wNDcsMTAuOTExLDAsMTUuMTUxbDIxLjQyLDIxLjk0M2MxLjg1NCwyLjA3Niw0LjUzMiwzLjIyNCw3LjMxNCwzLjEzNSAgICAgYzIuNzU2LTAuMDM5LDUuMzg1LTEuMTY2LDcuMzE0LTMuMTM1bDQwLjc1MS0zOC42NjFjNC4wNC0zLjcwNiw0LjMxLTkuOTg2LDAuNjAzLTE0LjAyNSAgICAgQzE3OS42MjgsMjMzLjk2MiwxNzkuNDI3LDIzMy43NjEsMTc5LjIxNywyMzMuNTY5eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCQk8cGF0aCBkPSJNMzI5LjE2LDI1Ni4wMzRIMjA4Ljk5N2MtNS43NzEsMC0xMC40NDksNC42NzgtMTAuNDQ5LDEwLjQ0OXM0LjY3OCwxMC40NDksMTAuNDQ5LDEwLjQ0OUgzMjkuMTYgICAgIGM1Ljc3MSwwLDEwLjQ0OS00LjY3OCwxMC40NDktMTAuNDQ5UzMzNC45MzEsMjU2LjAzNCwzMjkuMTYsMjU2LjAzNHoiIGZpbGw9IiM2ZjQyYzIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCQkJPHBhdGggZD0iTTE3OS4yMTcsMTQ5Ljk3N2MtMy45MTktNC4xMzEtMTAuNDI1LTQuMzY0LTE0LjYyOS0wLjUyMmwtMzMuNDM3LDMxLjg2OWwtMTQuMTA2LTE0LjYyOSAgICAgYy0zLjkxOS00LjEzMS0xMC40MjUtNC4zNjQtMTQuNjI5LTAuNTIyYy00LjA0Nyw0LjI0LTQuMDQ3LDEwLjkxMSwwLDE1LjE1MWwyMS40MiwyMS45NDNjMS44NTQsMi4wNzYsNC41MzIsMy4yMjQsNy4zMTQsMy4xMzUgICAgIGMyLjc1Ni0wLjAzOSw1LjM4NS0xLjE2Niw3LjMxNC0zLjEzNWw0MC43NTEtMzguNjYxYzQuMDQtMy43MDYsNC4zMS05Ljk4NiwwLjYwMy0xNC4wMjUgICAgIEMxNzkuNjI4LDE1MC4zNywxNzkuNDI3LDE1MC4xNjksMTc5LjIxNywxNDkuOTc3eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCQk8cGF0aCBkPSJNMzI5LjE2LDE3Mi40NDJIMjA4Ljk5N2MtNS43NzEsMC0xMC40NDksNC42NzgtMTAuNDQ5LDEwLjQ0OXM0LjY3OCwxMC40NDksMTAuNDQ5LDEwLjQ0OUgzMjkuMTYgICAgIGM1Ljc3MSwwLDEwLjQ0OS00LjY3OCwxMC40NDktMTAuNDQ5UzMzNC45MzEsMTcyLjQ0MiwzMjkuMTYsMTcyLjQ0MnoiIGZpbGw9IiM2ZjQyYzIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCQkJPHBhdGggZD0iTTE3OS4yMTcsMzE3LjE2Yy0zLjkxOS00LjEzMS0xMC40MjUtNC4zNjMtMTQuNjI5LTAuNTIybC0zMy40MzcsMzEuODY5bC0xNC4xMDYtMTQuNjI5ICAgICBjLTMuOTE5LTQuMTMxLTEwLjQyNS00LjM2My0xNC42MjktMC41MjJjLTQuMDQ3LDQuMjQtNC4wNDcsMTAuOTExLDAsMTUuMTUxbDIxLjQyLDIxLjk0M2MxLjg1NCwyLjA3Niw0LjUzMiwzLjIyNCw3LjMxNCwzLjEzNSAgICAgYzIuNzU2LTAuMDM5LDUuMzg1LTEuMTY2LDcuMzE0LTMuMTM1bDQwLjc1MS0zOC42NjFjNC4wNC0zLjcwNiw0LjMxLTkuOTg2LDAuNjAzLTE0LjAyNSAgICAgQzE3OS42MjgsMzE3LjU1NCwxNzkuNDI3LDMxNy4zNTMsMTc5LjIxNywzMTcuMTZ6IiBmaWxsPSIjNmY0MmMyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJCTxwYXRoIGQ9Ik0zMjkuMTYsMzM5LjYyNkgyMDguOTk3Yy01Ljc3MSwwLTEwLjQ0OSw0LjY3OC0xMC40NDksMTAuNDQ5czQuNjc4LDEwLjQ0OSwxMC40NDksMTAuNDQ5SDMyOS4xNiAgICAgYzUuNzcxLDAsMTAuNDQ5LTQuNjc4LDEwLjQ0OS0xMC40NDlTMzM0LjkzMSwzMzkuNjI2LDMyOS4xNiwzMzkuNjI2eiIgZmlsbD0iIzZmNDJjMiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCTwvZz4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" alt="sembuh">
                <h3><?= $indonesia[0]['sembuh']; ?></h3>
                <p>Sembuh</p>
            </div>
        </div>
    </div>
    <!-- Akhir Statistik Coronavirus -->

    <!-- Body tentang gejala corona -->
        <div class="display-body-3" id='display-body-5'>
        <div class="container">
            <div class="row">
                <div class="col xl7 display-body-4-content-1 center-align">
                    <h2>Gejala yang ditimbukan dari virus corona</h2>
                    <p>Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. </p>
                </div>
            </div>
            <div class="row containerCard">
                <div class="cards">
                    <img src="<?= $this->config->base_url()?>assets/img/home/flu.png" alt="Flu">
                    <div class="contentCards">
                        <h3>Demam</h3>
                        <p>Jika suhu tubuh seseorang tinggi mencapai 38°</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="<?= $this->config->base_url()?>assets/img/home/batuk.png" alt="Batuk">
                    <div class="contentCards">
                        <h3>Batuk kering</h3>
                        <p>Seseorang yang terkena virus corona akan mengalami batuk tanpa liur/batuk kering</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="<?= $this->config->base_url()?>assets/img/home/batuk2.png" alt="Batuk">
                    <div class="contentCards">
                        <h3>Sakit Flu</h3>
                        <p>Suara yang parau karena sakit tenggorokan bisa disebabkan virus corona</p>
                    </div>
                </div>
                <div class="cards">
                    <img src="<?= $this->config->base_url()?>assets/img/home/sakit.png" alt="Batuk">
                    <div class="contentCards">
                        <h3>Sakit kepala</h3>
                        <p>Ternyata sakit kepala juga bisa menjadi salah satu gejala saat terinfeksi virus Corona</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Body tentang gejala corona -->

    <!-- Body tentang bagaimana melindungi diri -->
        <div class="container display-body-4">
        <div class="row">
            <div class="col xl7 display-body-4-content-1 center-align">
                <h2>Cara melindungi diri dari penularan virus corona</h2>
                <p>Selalu menjaga jarak dimanapun anda berada, selalu menggunakan masker didalam ataupun diluar rumah serta selalu menjaga kebersihan tangan dan wajah.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xl7 lg7 sm12 display-body-4-content-2">
                <div>
                    <h4>Hal yang bisa anda lakukan :</h4>
                    <ul class="checklist2">
                        <li><span class="material-icons">done</span>Menjaga Jarak</li>
                        <li><span class="material-icons">done</span>Tetap berada dirumah</li>
                        <li><span class="material-icons">done</span>Menggunakan masker</li>
                        <li><span class="material-icons">done</span>Menjaga kebersihan</li>
                        <li><span class="material-icons">done</span>Mengurangi sentuhan fisik</li>
                        <li><span class="material-icons">done</span>Meminum vitamin </li>
                    </ul>
                </div>
                <div>
                    <h4>Hal yang harus dihindari :</h4>
                    <ul class="checklist2">
                        <li><span class="material-icons no-bg">close</span>Tidak menjaga jarak dari kerumunan</li>
                        <li><span class="material-icons no-bg">close</span>Tidak menggunakan masker</li>
                        <li><span class="material-icons no-bg">close</span>Tidak mencuci tangan</li>
                        <li><span class="material-icons no-bg">close</span>Berpergian</li>
                        <li><span class="material-icons no-bg">close</span>Tidak menjaga daya tubuh</li>
                    </ul>
                </div>
            </div>
            <div class="col xl5 lg5 sm12 display-body-4-content-3">
                <img src="<?= $this->config->base_url()?>assets/img/home/protect1.jpg" alt="header">
            </div>
        </div>
    </div>
    <!-- Akhir Body bagaimana melindungi diri -->