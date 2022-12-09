<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Light Novel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul>
            <li><img src="./img/logo.png" alt="logo"></li>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="page1.php">About</a></li>
            <li><a href="page2.php">Shop</a></li>
            <li><a href="page3.php">Review</a></li>
            <li><a href="page4.php">Gallery</a></li>
            <li id="contact"><a href="#">Log in</a></li>
            <li id="contact"><a href="#">Register</a></li>
        </ul>
    </header>

<div class="benner"></div>

<section class="about">
		<div class="main">
			<img src="img/3r1.jpg">
			<div class="about-text">
				<h2>Light novel</h2>
				<h5>ไลท์โนเวล</h5>
				<p>ไลต์โนเวล ย่อว่า LN หมายถึงนิยายประเภทหนึ่งจากประเทศญี่ปุ่น เป็นนิยายสำหรับวัยรุ่นโดยเฉพาะกลุ่มนักเรียนมัธยมปลาย 
          ไลต์โนเวลหนึ่งเล่มมีความยาว 50,000 คำ ซึ่งถือว่าใกล้เคียงกับเกณฑ์ขั้นต่ำของนวนิยายตะวันตก ไลต์โนเวลนิยมตีพิมพ์ด้วยรูปเล่มขนาด A5 </p>
				<button class="text-white text-2xl"><a href="page1.php">อ่านต่อ</a></button>
			</div>
		</div>
	</section>

<div class="main1">
    <h1 class="text-center text-3xl text-white mt-10 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">แนะนำ</h1>
    <div class="flex justify-center mt-10">
    <iframe width="854" height="480" src="https://www.youtube.com/embed/fHi1AjxW5Jo"></iframe>
        </div>
</div>
</div>

<div class="main1">
<h2 class="text-center text-3xl text-white py-6 font-bold mb-4 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">
        สินค้าแนะนำ
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mb-8 gap-2 mx-12 my-5">
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r1.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white text-xl">Tokidoki Bosotto Roshiago De Dereru Tonari no Alya-san</strong>
            <p class="text-white">
            เรื่องราวของหญิงสาวเจ้าของผมสีเงิน ลูกครึ่งญี่ปุ่นรัสเซียผู้สง่างาม อาริสะ มิฮาอิลลอฟนา คุโจ ผู้ที่มีฉายาว่า ‘องค์หญิงผู้สันโดษ’ กับชายหนุ่ม  คุเซะ มาซาจิกะ นักเรียนไม่เอาไหนผู้ไม่มีใจทำอะไรทั้งนั้น ใช้ชีวิตกับงานอดิเรกแนวโอตะคุ ที่นั่งโต๊ะข้างกัน
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 275</p>
            <button
              class="hover:bg-stone-600 transition-all hover:scale-110 rounded-md p-2 bg-orange-900 text-white font-bold text-lg cursor-pointer"
            >
              View item
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r2.jpg" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white text-xl">Overlord</strong>
            <p class="text-white">
            ในปีค.ศ. 2136 'อิกดราซิล' เกมออนไลน์เสมือนจริงที่เคยได้รับความนิยมอย่างสูงกำลังจะปิดให้บริการลง ด้วยความอาลัยอาวรณ์ 
            'โมมอนกะ' ผู้เล่นคนหนึ่งซึ่งหลงใหลในเกมนี้ ตัดสินใจอยู่จนวินาทีสุดท้าย ทว่าพอถึงเวลาปิดให้บริการก็เกิดเรื่องไม่คาดฝัน 
            เมื่อเข้ากลับยังติดค้างอยู่ในอิกดราซิลหนำซ้ำตัวละครอื่นที่เคยเป็นเพียงโปรแกรมก็มีชีวิตเหมือนจริง?!
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 295</p>
            <button
              class="hover:bg-stone-600 transition-all hover:scale-110 rounded-md p-2 bg-orange-900 text-white font-bold text-lg cursor-pointer"
            >
              View item
            </button>
          </div>
        </div>
        <div class="p-2 bg-black rounded-md">
          <img src="./img/r3.png" class="h-120 w-full object-cover">
          <div class="text-center mt-2 mb-2">
            <strong class="font-bold text-white text-xl">Tensei Shitara Suraimu Datta Ken</strong>
            <p class="text-white">
            มิคามิ ชายหนุ่มมนุษย์เงินเดือนผู้ยังซิง ถูกทำร้ายจนเสียชีวิต แล้วกลับไปเกิดใหม่เป็นมอนสเตอร์ชนิดสไลม์ 
            ที่รู้กันว่าเป็นสิ่งมีชีวิตที่อ่อนแอที่สุด แต่เจ้าสไลม์ตัวนี้กลับมียูนีกสกิล มหาปราชญ์ ที่ช่วยแนะนำข้อมูลต่างๆ และยังมีอีกยูนีกสกิล คือ นักล่า 
            </p>
            <p class="text-lg font-bold text-white italic mt-2 mb-2">ราคา 289</p>
            <button
              class="hover:bg-stone-600 transition-all hover:scale-110 rounded-md p-2 bg-orange-900 text-white font-bold text-lg cursor-pointer"
            >
              View item
            </button>
          </div>
        </div>
</div>

        
<div class="footer"></div>

</body>
</html>