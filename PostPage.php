<?php
session_start();

$pageid = 1;
if (!isset($_SESSION['identity']) OR $_SESSION['identity'] != $pageid ) 
    header("Location: login.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/RWD.css">
    <link rel="stylesheet" href="css/PostPage.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>投稿頁面</title>
</head>

<body>
    <header class="flex">
        <div id="logo">
            <a href="https://www.chihlee.edu.tw/"><img src="img/chihleeB.png" alt=""></a>
        </div>
        <menu>
            <ul>
                <li><a href="FrontPage.html" class="action">關於論文</a></li>
                <li><a href="PostPage.php">投稿專區</a></li>
                <li><a href="SubmissionQuery.php">投稿狀態查詢</a></li>
                <li><a href="ReviewerFrontPage.php">審稿專區</a></li>
                <li><a href="login.html"><img src="img/user.png" alt="" style="width: 20px;height: 20px;"></a></li>
                <li><a href="DataUpdate.php"><img src="img/settings.png" alt="" style="width: 20px;height: 20px;"></a></li>
            </ul>
        </menu>
        <div id="hamburger">
            <div class="hamT"></div>
            <div class="hamM"></div>
            <div class="hamB"></div>
        </div>
    </header>
    <form action="creatwriter.php" method="post" enctype="multipart/form-data">
    <div id="postPage" class="container postPage">
        <div class="postSize" id="postSize">
       
            <fieldset>
             
                <legend>文章基本資料</legend>
                <div>
                    <p class="textP">作者</p>
                    <div name="workNameBox">
                        <textarea name="writer" id="writer" cols="30" rows="2"></textarea>
                        <p class="writerP" id="writerP"><span>多位作者間用&#34;;&#34;進行隔開</span></p>
                    </div>
                </div>
                <div>
                    <p class="textP">作品名稱</p>
                    <div name="workNameBox">
                        <textarea name="workName" id="workName" cols="30" rows="2"></textarea>
                    </div>
                </div>
                <div>
                    <p class="textP">稿件類別</p>
                    <div>
                        <select name="postSelect" id="postSelect" class="postSelect">
                            <option value="商業類">商業類</option>
                            <option value="教育類">教育類</option>
                            <option value="醫學類">醫學類</option>
                            <option value="工程技術類">工程技術類</option>
                        </select>
                    </div>
                </div>
                <div>
                    <p class="textP">內容摘要</p>
                    <div>
                        <textarea name="abstract" id="abstract" style="height: 75px;resize: vertical;" cols="30"
                            rows="2"></textarea>
                    </div>
                </div>
            
            </fieldset>
            <fieldset>
                <legend>檔案上傳</legend>
                <div class="dw-wrap">           
                        <input class="fileUpload" type="file" name="file" accept=".doc,.docx,.pdf"><br/>
                </form>
                </div>
            </fieldset>
            <div class="button-group flex">
                <input class="button buttonB" type="submit" name="button1" value="Submit">
                <input class="button buttonB" type="button" value="Cancel">
            </div>         
        </div>
    </div>
    </form>
    <footer>
        Copyright &copy; 2022 Yu. All right reserved.<br>
        220305 新北市板橋區文化路1段313號
        <br>
        No.313, Sec. 1, Wenhua Rd., Banqiao Dist., New Taipei City 220305, Taiwan (R.O.C.)
        <br>
        TEL：(02)2257-6167 │ (02)2257-6168 │ FAX：(02)2258-3710
    </footer>
</body>

</html>
<script>
    let hb = document.getElementById("hamburger");
    let meun = document.getElementsByTagName("menu")[0];
    let hamT = document.getElementsByClassName("hamT")[0];
    let hamM = document.getElementsByClassName("hamM")[0];
    let hamB = document.getElementsByClassName("hamB")[0];
    hb.addEventListener("click", function () {
        if (meun.style.display == "none" || meun.style.display == "") {
            meun.style.display = "block";
            hamT.style.transform = "rotate(26deg)";
            hamM.style.opacity = "0";
            hamB.style.transform = "rotate(-26deg)";
        } else {
            meun.style.display = "none";
            hamT.style.transform = "rotate(0deg)";
            hamM.style.opacity = "1";
            hamB.style.transform = "rotate(0deg)";
        }
    })
</script>
