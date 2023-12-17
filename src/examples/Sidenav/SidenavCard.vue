<template>
  <div
    v-show="this.$store.state.layout !== 'landing'"
    class="card card-plain shadow-none"
    id="sidenavCard"
  >
    <div class="p-3 card-body text-center w-100 pt-0">
      <img
        class="w-50 mx-auto"
        src="@/assets/img/illustrations/icon-documentation.svg"
        alt="sidebar_illustration"
      />
      <h6  class="mb-0 text-dark up">需要幫助 ?</h6>
      <p  class="text-xs font-weight-bold">請直接聯絡當地醫事機構</p>
    </div>
    <a
      href="https://info.nhi.gov.tw/INAE1000/INAE1000S00"
      target="_blank"
      class="mb-3 btn btn-dark btn-sm w-100"
      >查看健保特約醫事機構</a
    >
  

    <a
      href="http://sub.chimei.org.tw/57320/"
      target="_blank"
      class="mb-3 btn btn-success btn-sm w-100"
      >查看奇美心血管科</a
    >
  </div>
</template>
<script>
import img from "../../assets/img/illustrations/icon-documentation.svg";

export default {
  name: "sidenav-card",
  props: ["textPrimary", "textSecondary", "iconClass"],
  data() {
    return {
      img
    };
  }
};
</script>
