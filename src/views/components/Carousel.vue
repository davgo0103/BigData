<template>
  <div class="card card-carousel overflow-hidden h-100 p-0">
    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
      <div class="carousel-inner border-radius-lg h-100">


        
          <div class="carousel-item h-100 active" :style="{
            backgroundImage: 'url(' + require('@/assets/img/carousel-1.jpg') + ')',
            backgroundSize: 'cover',
          }">

            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
              <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-camera-compact text-dark opacity-10"></i>
              </div>
              <a href="https://health.gvm.com.tw/article/77059" target="_blank">
              <h5 class="text-white mb-1">心臟病：WHO公佈2000～2019年全球死亡主要原因</h5></a>
              <p>【專家觀點】</p>
            </div>
          </div>
        


        <div class="carousel-item h-100" :style="{
          backgroundImage: 'url(' + require('@/assets/img/carousel-2.jpg') + ')',
          backgroundSize: 'cover',
        }">

          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
              <i class="ni ni-bulb-61 text-dark opacity-10"></i>
            </div>
            <a href="https://www.mohw.gov.tw/cp-16-74869-1.html" target="_blank"><h5 class="text-white mb-1">111年 國人死因統計結果</h5></a>
            <p>資料來源：統計處 建檔日期：112-06-12</p>
          </div>
        </div>
        
        <div class="carousel-item h-100" :style="{
          backgroundImage: 'url(' + require('@/assets/img/carousel-3.jpg') + ')',
          backgroundSize: 'cover'
        }">
          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
              <i class="ni ni-trophy text-dark opacity-10"></i>
            </div>
            <a href="https://www.bbc.com/ukchina/trad/47483657" target="_blank"><h5 class="text-white mb-1">全球十大死亡原因 「頭號殺手」是什麼？</h5></a>
            <p>日本兒童死亡率非常低</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">上一頁</span>
      </button>
      <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">下一頁</span>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "carousel",
};
</script>
