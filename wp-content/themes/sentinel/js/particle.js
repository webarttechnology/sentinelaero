
(async () => {
	await loadAll(tsParticles);

	await tsParticles.addPreset("lightdark", {
		fullScreen: {
			enable: false
		},
		particles: {
			links: {
				enable: true
			},
			move: {
				enable: true
			},
			number: {
				value: 50
			},
			opacity: {
				value: { min: 0.3, max: 1 }
			},
			shape: {
				type: ["circle", "square", "triangle", "polygon"],
				options: {
					polygon: [
						{
							sides: 5
						},
						{
							sides: 6
						},
						{
							sides: 8
						}
					]
				}
			},
			size: {
				value: { min: 1, max: 3 }
			}
		}
	});

	await tsParticles.load({
		id: "dark",
		options: {
			preset: "lightdark",
			particles: {
				color: {
					value: "#E0FFFF"
				},
				links: {
					color: "#E0FFFF"
				}
			}
		}
	});
})();
