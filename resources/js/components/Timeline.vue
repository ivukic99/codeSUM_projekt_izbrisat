<template>
	<v-app>
		<v-container class="container-margin" style="margin-bottom: 132px">
			<v-timeline :dense="$vuetify.breakpoint.smAndDown">
				<v-timeline-item v-for="(item, i) in items" :key="i" color="#1B4188">

					<v-hover v-slot:default="{ hover }" open-delay="100">
						<v-card :elevation="hover ? 18 : 4">
							<v-card-title style="background: #1B4188;">
								<h2 class="display-1 white--text font-weight-light">{{ item.heading }}</h2>
							</v-card-title>
							<v-container>
								<v-row>
									<v-col cols="12" md="10" v-text="item.text"></v-col>
								</v-row>
							</v-container>
						</v-card>
					</v-hover>
				</v-timeline-item>
			</v-timeline>
		</v-container>
	</v-app>
</template>

<script>
export default {
	name: 'TimeLine',
	data: () => ({
		items: [
			{
				oppositeText: 'Naslov1',
				heading: 'Podnaslov1',
				text:
          'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				icon: 'mdi-calendar',
			},
			{
				oppositeText: 'Naslov2',
				heading: 'Podnaslov2',
				text:
          'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum',
				icon: 'mdi-calendar',
			},
			{
				oppositeText: 'Naslov3',
				heading: 'mdi-calendar',
				text:
          'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem',
				icon: 'mdi-calendar',
            },
            {
				oppositeText: 'Naslov3',
				heading: 'mdi-calendar',
				text:
          'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem',
				icon: 'mdi-calendar',
			}
		],
	}),
};
</script>

<style>
  #app .v-card__title {
    word-break: normal;
  }
</style>