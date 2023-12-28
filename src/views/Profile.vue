<template>
  <main>
    <div class="container-fluid">
      <div class="page-header min-height-300" style="
          background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
          margin-right: -24px;
          margin-left: -34%;
        ">
        <span class="mask bg-gradient-success opacity-6"></span>
      </div>
      <div class="card shadow-lg mt-n6">
        <div class="card-body p-3">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="../assets/img/team-1.jpg" alt="profile_image" class="shadow-sm w-100 border-radius-lg" />
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">心臟衰竭死亡預測</h5>
                <p class="mb-0 font-weight-bold text-sm">使用SVM訓練的預測模型</p>
              </div>
            </div>
            <div class="mx-auto mt-3 col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0">
              <div class="nav-wrapper position-relative end-0">
                <ul class="p-1 bg-transparent nav nav-pills nav-fill" role="tablist">
                  <li class="nav-item">
                    <a class="px-0 py-1 mb-0 nav-link active" data-bs-toggle="tab" href="javascript:;" role="tab"
                      aria-selected="true">
                      <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(603.000000, 0.000000)">
                                <path class="color-background"
                                  d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" />
                                <path class="color-background"
                                  d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                  opacity="0.7" />
                                <path class="color-background"
                                  d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                  opacity="0.7" />
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                      <span class="ms-1">App</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-4 container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">死亡預測</p>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">資料越精準越好</p>
              <div class="row">
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">年齡</label>
                  <input type="number" class="form-control" v-model="age" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">貧血</label>
                  <select class="form-control" v-model="anaemia" id="anaemia">
                    <option :value="1">有</option>
                    <option :value="0">無</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">肌酸磷激酶 單位:U/L <spcan style="color: rgb(139, 220, 197);"> 正常男性：62 ~ 287 U/L；女性：45 ~ 163 U/L</spcan></label>
                  <input type="number" class="form-control" v-model="creatinine_phosphokinase" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">糖尿病</label>
                  <select class="form-control" v-model="diabetes">
                    <option :value="1">有</option>
                    <option :value="0">無</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">射血分數 (EF) 單位: % <span style="color: rgb(139, 220, 197);"> 正常範圍：50% ~ 70%</span></label>
                  <input type="number" class="form-control" v-model="ejection_fraction" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">高血壓</label>
                  <select class="form-control" v-model="high_blood_pressure">
                    <option :value="1">有</option>
                    <option :value="0">無</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">白血球計數 單位: ul <span style="color: rgb(139, 220, 197);"> 正常範圍：4000~10,000/ul</span></label>
                  <input type="number" class="form-control" v-model="platelets" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">血清肌酸酐 單位: mg/dL <span style="color: rgb(139, 220, 197);"> 正常男性0.7～1.2 mg/dL 女性0.5～1.0 mg/dL</span></label>
                  <input type="number" class="form-control" v-model="serum_creatinine" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">血清鈉 單位: mEq/L <span style="color: rgb(139, 220, 197);"> 正常範圍：134 ~ 148</span></label>
                  <input type="number" class="form-control" v-model="serum_sodium" />
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">性別</label>
                  <select class="form-control" v-model="sex">
                    <option :value="1">男</option>
                    <option :value="0">女</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">吸菸</label>
                  <select class="form-control" v-model="smoking">
                    <option :value="1">有</option>
                    <option :value="0">無</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="example-text-input" class="form-control-label">監測時間 單位:天</label>
                  <input type="number" class="form-control" v-model="time" />
                </div>
                <p></p>
                <argon-button color="success" size="sm" class="ms-auto" @click="test">預測</argon-button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <profile-card />
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import setNavPills from "@/assets/js/nav-pills.js";
import setTooltip from "@/assets/js/tooltip.js";
import ProfileCard from "./components/ProfileCard.vue";
import ArgonButton from "@/components/ArgonButton.vue";
import axios from "axios";
import Swal from "sweetalert2";

const body = document.getElementsByTagName("body")[0];

export default {
  data() {
    return {
      age: null,
      anaemia: null,
      creatinine_phosphokinase: null,
      diabetes: null,
      ejection_fraction: null,
      high_blood_pressure: null,
      platelets: null,
      serum_creatinine: null,
      serum_sodium: null,
      sex: null,
      smoking: null,
      time: null,
    };
  },
  components: { ProfileCard, ArgonButton },

  mounted() {
    this.$store.state.isAbsolute = true;
    setNavPills();
    setTooltip();
  },
  methods: {
    async test() {

      // 假設你希望將一些資料傳遞到 PHP 檔案
      var postData = {
        age: this.age,
        anaemia: this.anaemia,
        creatinine_phosphokinase: this.creatinine_phosphokinase,
        diabetes: this.diabetes,
        ejection_fraction: this.ejection_fraction,
        high_blood_pressure: this.high_blood_pressure,
        platelets: this.platelets,
        serum_creatinine: this.serum_creatinine,
        serum_sodium: this.serum_sodium,
        sex: this.sex,
        smoking: this.smoking,
        time: this.time
      };
      console.table(postData);
      // 使用 Axios 發送 POST 請求


      try {
        const response = await axios.post("http://127.0.0.1/BigData/public/test/test.php", postData);
        console.table(response.data);
        if (response.data == "1" || response.data == "0") {
          if (response.data == "1") {
            Swal.fire({
              title: "預測結果",
              text: "這人非常接近死亡邊緣",
              icon: "warning",
              confirmButtonText: "確定",
            });
          } else {
            Swal.fire({
              title: "預測結果",
              text: "這人非常健康",
              icon: "success",
              confirmButtonText: "確定",
            });
          }
        } else {
          Swal.fire({
            title: "錯誤",
            text: "無法進行判斷，可能有缺少的值或後端錯誤",
            icon: "error",
            confirmButtonText: "確定",
          });
          console.log(response.data);
        }
      } catch (error) {
        Swal.fire('錯誤', '程序運行錯誤', 'error')
        console.error(error);
      }
    }

  },
  beforeMount() {
    this.$store.state.imageLayout = "profile-overview";
    this.$store.state.showNavbar = false;
    this.$store.state.showFooter = true;
    this.$store.state.hideConfigButton = true;
    body.classList.add("profile-overview");
  },
  beforeUnmount() {
    this.$store.state.isAbsolute = false;
    this.$store.state.imageLayout = "default";
    this.$store.state.showNavbar = true;
    this.$store.state.showFooter = true;
    this.$store.state.hideConfigButton = false;
    body.classList.remove("profile-overview");
  }
};
</script>
