<!DOCTYPE html>
<html lang="en">

<?php
                           
					
                            require_once("cfg.php");
							require_once("sqlLink.php");

                            $link =connect(DB_HOST,DB_USER,DB_PWD,DB_DATABASE)
                            or die("無法開啟資料連接!<br/>");
							$id = $_GET['id'];
						    $sql = "SELECT * FROM article where articleID='$id'" ;
                            $result = mysqli_query($link, $sql);							
                            $row = mysqli_fetch_row($result);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ReviewerStatusPage.css">
    <link rel="stylesheet" href="css/RWD_reviewer.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>審稿頁面</title>
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
                <li><a href="ReviewerFrontPage.html">審稿專區</a></li>
                <li><a href="login.html"><img src="img/user.png" alt="" style="width: 18px;height: 18px;"></a></li>
                <li><a href="DataUpdate.php"><img src="img/settings.png" alt="" style="width: 18px;height: 18px;"></a>
                </li>
            </ul>
        </menu>
        <div id="hamburger">
            <div class="hamT"></div>
            <div class="hamM"></div>
            <div class="hamB"></div>
        </div>
    </header>
    <div class="ReviewerStatus container" id="ReviewerStatus">
        <div class="ReviewerStatusSize" id="ReviewerStatusSize">
            <!--<fieldset> 標籤 (tag) 用來對表單 (form) 中的控制元件做分組 (group)，而 <legend> 標籤通常是 <fieldset> 裡面的第一個元素作為該分組的標題 (caption)。-->
            <fieldset>
                <legend>稿件評論狀態</legend>
                <div class="radio-group">
                    <input type="radio" class="radio-input" id="1" name="number">
                    <label for="1" class="radio-label">
                        <span class="radio-button"></span>接受
                    </label>
                </div>
                <div class="radio-group">
                    <input type="radio" class="radio-input" id="2" name="number">
                    <label for="2" class="radio-label">
                        <span class="radio-button"></span>拒絕
                    </label>
                </div>
                <div class="radio-group">
                    <input type="radio" class="radio-input" id="3" name="number">
                    <label for="3" class="radio-label">
                        <span class="radio-button"></span>修改後接受
                    </label>
                </div>
            </fieldset>
            <fieldset>
                <legend>投稿者資訊</legend>
                 <div style="display:flex;">
					<div class="text"><p class="textP">稿件編號：</p></div><div class="textPp "><span style="border-bottom: 1px #cccccc solid;"><?php
						echo"$row[1]";
					?></span></div>
				</div>
				<div style="display:flex;">
					<div class="text"><p class="textP">作品名稱：</p></div><div class="textPp "><span style="border-bottom: 1px #cccccc solid;"><?php
						echo"$row[5]";
					?></span></div>
				</div>
				<div style="display:flex;">
					<div class="text"><p class="textP">投稿者姓名：</p></div><div class="textPp "><span style="border-bottom: 1px #cccccc solid;"><?php
						echo"$row[2]";
					?></span></div>
				</div>
				<div style="display:flex;">
					<div class="text"><p class="textP">稿件類別：</p></div><div class="textPp "><span style="border-bottom: 1px #cccccc solid;"><?php
						echo"$row[6]";
					?></span></div>
				</div>
				<div style="display:flex;">
					<div class="text"><p class="textP">作品摘要：</p></div><div class="textPp "><textarea name="text" id="text" cols="30" rows="10"><?php
						echo"$row[7]";
						?></textarea></div>
				</div>



            </fieldset>
            <fieldset>
                <legend>檔案下載</legend>
                <li class="dw-wrap">
                    <a href="$row[1]/download/" class="dw-link dw-item">
                        <div class="dw-name">
						<?php echo"$row[5]";?>
                        </div>
                        <div class="dw-image"><img class="list-image-thumb" src="img/dw.png" alt="down"></div>
                    </a>
                </li>
            </fieldset>
            <div>
                <fieldset>
                    <legend>是否符合主題？</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="4" name="number1">
                        <label for="4" class="radio-label"><span class="radio-button"></span>非常符合</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="5" name="number1"><label for="5"
                            class="radio-label"><span class="radio-button"></span>符合</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="6" name="number1">
                        <label for="6" class="radio-label">
                            <span class="radio-button"></span>普通
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="7" name="numbe1">
                        <label for="7" class="radio-label">
                            <span class="radio-button"></span>不太符合
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="8" name="number1">
                        <label for="8" class="radio-label">
                            <span class="radio-button"></span>不符合
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文是否具有參考價值</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="9" name="number">
                        <label for="9" class="radio-label">
                            <span class="radio-button"></span>對廣大讀者具有高參考價值
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="10" name="number">
                        <label for="10" class="radio-label">
                            <span class="radio-button"></span>對有限讀者有高參考價值
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="11" name="number">
                        <label for="11" class="radio-label">
                            <span class="radio-button"></span>對廣大讀者有邊際參考價值
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="12" name="number">
                        <label for="12" class="radio-label">
                            <span class="radio-button"></span>對有限讀者有邊際參考價值
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="13" name="number">
                        <label for="13" class="radio-label">
                            <span class="radio-button"></span>無參考價值
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文長度</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="14" name="number">
                        <label for="14" class="radio-label">
                            <span class="radio-button"></span>合適的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="15" name="number">
                        <label for="15" class="radio-label">
                            <span class="radio-button"></span>需延長(請在下方說明)
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="16" name="number">
                        <label for="16" class="radio-label">
                            <span class="radio-button"></span>需縮短(請在下方說明)
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文內容的質量</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="17" name="number">
                        <label for="17" class="radio-label">
                            <span class="radio-button"></span>出色的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="18" name="number">
                        <label for="18" class="radio-label">
                            <span class="radio-button"></span>一般
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="19" name="number">
                        <label for="19" class="radio-label">
                            <span class="radio-button"></span>較差的
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>實驗評估</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="20" name="number">
                        <label for="20" class="radio-label">
                            <span class="radio-button"></span>具有說服力
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="21" name="number">
                        <label for="21" class="radio-label">
                            <span class="radio-button"></span>有限但令人信服
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="22" name="number">
                        <label for="22" class="radio-label">
                            <span class="radio-button"></span>無說服力的
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>技術正確性</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="23" name="number">
                        <label for="23" class="radio-label">
                            <span class="radio-button"></span>正確的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="24" name="number">
                        <label for="24" class="radio-label">
                            <span class="radio-button"></span>部分正確
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="25" name="number">
                        <label for="25" class="radio-label">
                            <span class="radio-button"></span>不正確
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文獨創性</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="26" name="number">
                        <label for="26" class="radio-label">
                            <span class="radio-button"></span>出色的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="27" name="number">
                        <label for="27" class="radio-label">
                            <span class="radio-button"></span>一般
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="28" name="number">
                        <label for="28" class="radio-label">
                            <span class="radio-button"></span>較差的
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文的完整度</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="29" name="number">
                        <label for="29" class="radio-label">
                            <span class="radio-button"></span>出色的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="30" name="number">
                        <label for="30" class="radio-label">
                            <span class="radio-button"></span>一般
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="31" name="number">
                        <label for="31" class="radio-label">
                            <span class="radio-button"></span>較差的
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>論文插圖質量</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="32" name="number">
                        <label for="32" class="radio-label">
                            <span class="radio-button"></span>出色的
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="33" name="number">
                        <label for="33" class="radio-label">
                            <span class="radio-button"></span>一般
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="34" name="number">
                        <label for="34" class="radio-label">
                            <span class="radio-button"></span>較差的
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>參考文獻的充分性</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="35" name="number">
                        <label for="35" class="radio-label">
                            <span class="radio-button"></span>參考文獻足夠
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="36" name="number">
                        <label for="36" class="radio-label">
                            <span class="radio-button"></span>參考文獻有一些遺漏（請在下方說明）
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="37" name="number">
                        <label for="37" class="radio-label">
                            <span class="radio-button"></span>參考文獻不足（請在下方說明）
                        </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>評論結果</legend>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="20" name="number">
                        <label for="20" class="radio-label">
                            <span class="radio-button"></span>接受
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="21" name="number">
                        <label for="21" class="radio-label">
                            <span class="radio-button"></span>拒絕
                        </label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" class="radio-input" id="22" name="number">
                        <label for="22" class="radio-label">
                            <span class="radio-button"></span>修改後接受
                        </label>
                    </div>
                </fieldset>
            </div>
            <fieldset>
                <legend>給作者的意見說明</legend>
                <div id="textareaBox" name="textareaBox" class="textareaBox">
                    <textarea name="textarea" id="textarea" class="textarea" cols="30" rows="4"></textarea>
                </div>
            </fieldset>
            <div class="button-group">
                <input class="button buttonB" type="button" value="取消">
                <input class="button buttonB" type="button" value="送出">
                <input class="button buttonB" type="button" value="暫存">
            </div>
        </div>
    </div>
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