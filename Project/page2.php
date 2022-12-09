<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Light Novel-Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
        <ul>
            <li><img src="./img/logo.png" alt="logo"></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="page1.php">About</a></li>
            <li><a href="page2.php" class="active">Shop</a></li>
            <li><a href="page3.php">Review</a></li>
            <li><a href="page4.php">Gallery</a></li>
            <li id="contact"><a href="#">Log in</a></li>
            <li id="contact"><a href="#">Register</a></li>
        </ul>
    </header>

    <div class="benner2"></div>

    <div class="main1">
<h2 class="text-center text-3xl text-white py-6 font-bold mb-4 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl mt-4">
        สินค้า
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 mb-8 gap-2 mx-12 my-5">
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r1.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white">Tokidoki Bosotto Roshiago De Dereru Tonari no Alya-san</strong>
            <p class="text-white">
            เรื่องราวของหญิงสาวเจ้าของผมสีเงิน ลูกครึ่งญี่ปุ่นรัสเซียผู้สง่างาม อาริสะ มิฮาอิลลอฟนา คุโจ ผู้ที่มีฉายาว่า ‘องค์หญิงผู้สันโดษ’ กับชายหนุ่ม  คุเซะ มาซาจิกะ นักเรียนไม่เอาไหนผู้ไม่มีใจทำอะไรทั้งนั้น ใช้ชีวิตกับงานอดิเรกแนวโอตะคุ ที่นั่งโต๊ะข้างกัน
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 275</p>
            <button
              class="hover:bg-red-600 transition-all hover:scale-110 rounded-md p-2 bg-emerald-700 text-white font-bold text-lg cursor-pointer">
              สั่งซื้อ
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r2.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white">Overlord</strong>
            <p class="text-white">
            ในปีค.ศ. 2136 'อิกดราซิล' เกมออนไลน์เสมือนจริงที่เคยได้รับความนิยมอย่างสูงกำลังจะปิดให้บริการลง ด้วยความอาลัยอาวรณ์ 
            'โมมอนกะ' ผู้เล่นคนหนึ่งซึ่งหลงใหลในเกมนี้ ตัดสินใจอยู่จนวินาทีสุดท้าย ทว่าพอถึงเวลาปิดให้บริการก็เกิดเรื่องไม่คาดฝัน 
            เมื่อเข้ากลับยังติดค้างอยู่ในอิกดราซิลหนำซ้ำตัวละครอื่นที่เคยเป็นเพียงโปรแกรมก็มีชีวิตเหมือนจริง?!
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 295</p>
            <button
              class="hover:bg-red-600 transition-all hover:scale-110 rounded-md p-2 bg-emerald-700 text-white font-bold text-lg cursor-pointer">
              สั่งซื้อ
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r3.png" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white">Tensei Shitara Suraimu Datta Ken</strong>
            <p class="text-white">
            มิคามิ ชายหนุ่มมนุษย์เงินเดือนผู้ยังซิง ถูกทำร้ายจนเสียชีวิต แล้วกลับไปเกิดใหม่เป็นมอนสเตอร์ชนิดสไลม์ 
            ที่รู้กันว่าเป็นสิ่งมีชีวิตที่อ่อนแอที่สุด แต่เจ้าสไลม์ตัวนี้กลับมียูนีกสกิล มหาปราชญ์ ที่ช่วยแนะนำข้อมูลต่างๆ และยังมีอีกยูนีกสกิล คือ นักล่า 
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 289</p>
            <button
              class="hover:bg-red-600 transition-all hover:scale-110 rounded-md p-2 bg-emerald-700 text-white font-bold text-lg cursor-pointer">
              สั่งซื้อ
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="https://overlordfree.web.id/wp-content/uploads/2018/09/Re_Zero_Volume_10_1-1.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white">Re:ZERO</strong>
            <p class="text-white">
            “นัตสึกิ สึบารุ” ที่กลับจากการซื้อของที่ร้านสะดวกซื้อ แต่อยู่ดีๆ ก็ย้ายมามิติอื่น ในขณะเดินหาคำตอบว่าตัวเองอยู่ใดมาได้ยังไง 
            แต่ชีวิตก็ตกอยู่ในอันตรายทันทีเพราะโดนกลุ่มโจรเล่นงาน สึบารุได้รับความช่วยเหลือจากสาวผมเงินปริศนา เพื่อทดแทนบุญคุณชายหนุ่มจึงช่วยเธอตามหาของที่เธอถูกขโมยไป
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 223</p>
            <button
              class="hover:bg-red-600 transition-all hover:scale-110 rounded-md p-2 bg-emerald-700 text-white font-bold text-lg cursor-pointer">
              สั่งซื้อ
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="https://kbimages1-a.akamaihd.net/45e1e1fc-ccbe-45ea-bb81-68eed2b1fa9d/1200/1200/False/86-eighty-six-vol-8-light-novel.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white">86ーEighty-Six</strong>
            <p class="text-white">
            สาธารณรัฐซันแมกโนเลียถูกจักรวรรดิ ซึ่งเป็นดินแดนข้างเคียงส่งจักรกลรบไร้พลขับ ลีเจี้ยน เข้ามารุกรานไม่เว้นแต่ละวัน 
            สาธารณรัฐจึงคิดค้นอาวุธรูปแบบเดียวกันขึ้นเพื่อการตอบโต้และในที่สุดก็สามารถขับไล่ภัยคุกคามสิ้นไปโดยไม่มีผู้ใดต้องสละชีพ 
            ใช่…เพียงเปลือกนอก ความจริงแล้วหาใช่ปราศจากการหลั่งเลือดเนื้อ “เขต 86 ไร้ซึ่งตัวตน” 
            ตั้งอยู่นอก “85” เขตของสาธารณรัฐ ทุกวันคืน เหล่าหนุ่มสาวอันถูกตีตรา “เอทตี้ซิกซ์” ได้เข้าต่อสู้ในฐานะ “จักรกลมีพลขับ” ตลอดมา
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 295</p>
            <button
              class="hover:bg-red-600 transition-all hover:scale-110 rounded-md p-2 bg-emerald-700 text-white font-bold text-lg cursor-pointer">
              สั่งซื้อ
            </button>
          </div>
        </div>
</div>


    
    <div class="footer"></div>

</body>
</html>