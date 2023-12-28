<template>
  <div class="card card-profile">
    <img src="../../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top" />
    <div class="row justify-content-center">
      <div class="col-4 col-lg-4 order-lg-2">
        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
          <a href="javascript:;">
            <img
              src="../../assets/img/team-1.jpg"
              class="rounded-circle img-fluid border border-2 border-white"
            />
          </a>
        </div>
      </div>
    </div>
    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
      <div class="d-flex justify-content-between">
        <a :href="require('../../assets/img/bg-profile.jpg')" target="_blank" class="btn btn-sm btn-info mb-0 d-none d-lg-block">看大張的效能截圖</a>
        <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none">
          <i class="ni ni-collection"></i>
        </a>

      </div>
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center">
            <div class="d-grid text-center">
              <span class="text-lg font-weight-bolder">300</span>
              <span class="text-sm opacity-8">訓練資料集大小</span>
            </div>
            <div class="d-grid text-center mx-4">
              <span class="text-lg font-weight-bolder">12</span>
              <span class="text-sm opacity-8">欄位</span>
            </div>
            <div class="d-grid text-center">
              <span class="text-lg font-weight-bolder">81.4%</span>
              <span class="text-sm opacity-8">模型準確度</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <h5>
          Heart Failure Prediction (心臟衰竭預測)
          <span class="font-weight-light"></span>
        </h5>
        <div class="h6 font-weight-300">
          <i class="ni location_pin mr-2"></i>資料集來源: <a href="https://www.kaggle.com/andrewmvd/heart-failure-clinical-data" target="_blank">點我前往</a>
        </div>
        <div class="h6 mt-4">
          <i class="ni business_briefcase-24 mr-2"></i>© 2023, made with  by 小蔡 for 大數據分析.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "profile-card",
};
</script>