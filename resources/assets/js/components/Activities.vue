<template>
  <div class="py-8">
        <div class="flex flex-col justify-between h-32 text-center ">
        <h2 class="text-4xl font-hairline">What we do</h2>
        <h3 class="text-xl max-w-lg mx-auto text-gray-600">
          We have developed community programs aimed at helping
          the most vulnerable to rebuild and strengthen their lives
        </h3>
        </div>
      <div class="flex flex-wrap py-12">
          <div class="w-full md:w-1/2 p-2"
            v-for="activity in activities"
            :key="activity.cardHolder"
          >
          <Activity :content="activity" />
          </div>
      </div>
    </div>
</template>
<script>
import Activity from "./Activity.vue";
export default {
  components: {
    Activity
  },
  data() {
    return {
      text: "hey",
      activities: [
        {
          cardHolder: "dollar",
          cardTitle: "Zero rated loans",
          cardText:
            "Advance business loans and grants  to refugees and other underprivileged groups"
        },
        {
          cardHolder: "handshake",
          cardTitle: "Relocation",
          cardText:
            "Relocate and resettle refugees to peaceful and welcoming countries"
        },
        {
          cardHolder: "leaf",
          cardTitle: "Refugee training",
          cardText:
            "Equip interested groups with farming skills to promote sustainable agriculture"
        }
      ,
        {
          cardHolder: "line",
          cardTitle: "Financial advice",
          cardText: "Offer financial advice to boost and sustain incomes"
        },
        {
          cardHolder: "book",
          cardTitle: "Fund education",
          cardText:
            "Offer funds to finance education of underprivileged groups primarily refugees"
        },
        {
          cardHolder: "group",
          cardTitle: "Community integration",
          cardText:
            "Integrate refugees and help them settle into new lives within their wider communities"
        },
        {
          cardHolder: "briefcase",
          cardIcon: "fa fa-briefcase",
          cardTitle: "Job search",
          cardText:
            "Secure jobs for beneficiaries in a safe and friendly environment "
        },
        {
          cardHolder: "bank",
          cardIcon: "fa fa-bank",
          cardTitle: "Goverment grants",
          cardText:
            "Help minority groups apply and secure goverment loans and grants"
        }
      ]
    };
  }
};
</script>

<style>
</style>
