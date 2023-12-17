<template>
  <div class="py-4 container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <card :title="stats.money.title" :value="stats.money.value" :percentage="stats.money.percentage"
              :iconClass="stats.money.iconClass" :iconBackground="stats.money.iconBackground" :detail="stats.money.detail"
              directionReverse></card>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <card :title="stats.users.title" :value="stats.users.value" :percentage="stats.users.percentage"
              :iconClass="stats.users.iconClass" :iconBackground="stats.users.iconBackground" :detail="stats.users.detail"
              directionReverse></card>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <card :title="stats.clients.title" :value="stats.clients.value" :percentage="stats.clients.percentage"
              :iconClass="stats.clients.iconClass" :iconBackground="stats.clients.iconBackground"
              :percentageColor="stats.clients.percentageColor" :detail="stats.clients.detail" directionReverse></card>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <card :title="stats.sales.title" :value="stats.sales.value" :percentage="stats.sales.percentage"
              :iconClass="stats.sales.iconClass" :iconBackground="stats.sales.iconBackground" :detail="stats.sales.detail"
              directionReverse></card>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-lg">
            <!-- line chart -->
            <div class="card z-index-2">
              <gradient-line-chart />
            </div>
          </div>
          <div class="col-lg-5">
            <carousel />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Card from "@/examples/Cards/Card.vue";
import GradientLineChart from "@/examples/Charts/GradientLineChart.vue";
import Carousel from "./components/Carousel.vue";


export default {
  name: "dashboard-default",
  data() {
    return {
      stats: {
        money: {
          title: "每年死於心血管疾病人數",
          value: " 1,790 萬",
          percentage: "+16%",
          iconClass: "ni ni-world-2",
          detail: "占死亡總數",
          iconBackground: "bg-gradient-primary",
        },
        users: {
          title: "我國高血壓比例",
          value: "34 %",
          iconClass: "ni ni-zoom-split-in",
          iconBackground: "bg-gradient-danger",
          detail: "男性 36% 、女性 32%",
        },
        clients: {
          title: "自2000年以來，因心血管疾病死亡",
          value: "仍在全球排名 TOP 10 內",
          iconClass: "ni ni-paper-diploma",
          percentageColor: "text-danger",
          iconBackground: "bg-gradient-success",
          detail: "統計至 2019 年",
        },
        sales: {
          title: "台灣2022年因心血管疾病死亡排名",
          value: "TOP 2",
          percentage: "+8.3%",
          iconClass: "ni ni-cart",
          iconBackground: "bg-gradient-warning",
          detail: "與2021相比",
        },
      },
    };
  },
  components: {
    Card,
    GradientLineChart,
    Carousel,
  },
};
</script>
