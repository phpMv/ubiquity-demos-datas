<?php
namespace ws\classes\data;

class DataArrayProvider extends AbstractDataProvider {

	private $partners = [
		[
			'name' => 'IG&H CONSULTING B.V.',
			'details' => 'Netherlands
						  250 to 499 Employees',
			'image' => 'https://www.outsystems.com/_image.aspx/WIyca3m9xIfHM_FyppksIcy8w7kkTD9EniOJEyPn2MU=/63a6c6fb-2dcd-4264-a532-d288598905c8IGH-logo-2019.png',
			'tag' => 'ELITE'
		],
		[
			'name' => 'CoolProfs',
			'details' => 'Netherlands
						  100 to 249 Employees',
			'image' => 'https://www.outsystems.com/_image.aspx/WIyca3m9xIfHM_FyppksIRJyPxk5HLI28JL7wrYkMkU=/bdd97216-2117-49ec-90a9-0ab9b9483dcacp_logo_tag_wide_fc-100.jpg',
			'tag' => 'ELITE'
		],
		[
			'name' => 'Cloud Development Resources',
			'details' => 'United States
						  500 to 999 Employees',
			'image' => 'https://www.outsystems.com/_image.aspx/WIyca3m9xIfHM_FyppksISz-CbfX8iXi-sXezSliFaY=/32073607-223c-4b82-ab44-80a9ab23e685logo-b.png',
			'tag' => 'ELITE'
		],
		[
			'name' => 'NCS Pte Ltd',
			'details' => 'Singapore
						  5000 to 9999 Employees',
			'image' => 'https://www.outsystems.com/_image.aspx/WIyca3m9xIfHM_FyppksITPdGaXHZohXmbvtajdZ4TI=/48f3252e-19c1-44ab-8eff-85e812ae0db0NCS_color.jpg',
			'tag' => 'ELITE'
		]
	];

	private function asObjects($array) {
		$res = [];
		foreach ($array as $v) {
			$res[] = (object) $v;
		}
		return $res;
	}

	public function getPartners() {
		return $this->asObjects($this->partners);
	}

	public function getPartner(string $name) {
		foreach ($this->partners as $partner) {
			if ($partner['name'] === $name) {
				return (object) $partner;
			}
		}
		return null;
	}

	public function getMessages() {
		$datas = [
			[
				'title' => 'First Message test',
				'content' => 'Fluctuat nec mergitur',
				'type' => 'olive',
				'icon' => 'spider'
			],
			[
				'title' => 'Second Message test',
				'content' => '',
				'type' => 'red',
				'icon' => 'dragon'
			]
		];
		return $this->asObjects($datas);
	}

	protected function getContents() {
		return [
			'Home' => '<h1 class="ui header"><i class="ui seedling icon"></i> Lorem Ipsum</h1><hr>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus metus nisi, rhoncus at convallis a, mollis sollicitudin nunc. Quisque quis lorem vitae neque varius pulvinar. Nunc vel felis est. Donec ut diam tincidunt, porta dui sit amet, cursus erat. Quisque elementum justo id nunc ultricies, et tempus nulla consectetur. Quisque accumsan tempus pellentesque. Mauris lobortis nisi a justo blandit pellentesque. Nulla fringilla dui scelerisque, cursus nisl sed, malesuada felis. Integer imperdiet ut velit accumsan rhoncus. Nunc molestie dui sed urna auctor porttitor. Etiam sed enim sit amet ante auctor mollis. In hac habitasse platea dictumst. Aliquam non pulvinar nibh. Nam ac purus vitae sapien ultricies consectetur.

							Duis tempus sit amet nisl ut scelerisque. Ut a eros tincidunt, tempor nulla at, tristique dolor. Nulla ex massa, cursus et lobortis ac, dapibus vitae ipsum. Sed varius velit id ligula vulputate, id venenatis dui viverra. Donec sapien nisl, scelerisque et efficitur eget, finibus vel ex. Donec egestas tortor vitae feugiat aliquet. Quisque ultrices tempor vestibulum.

							Morbi nec venenatis eros. Fusce sed aliquam lectus. Sed aliquet ultrices malesuada. Nam varius, mi non interdum dignissim, leo quam volutpat sem, vel sollicitudin lacus ipsum non metus. Ut massa nibh, placerat vel neque nec, ornare mattis neque. In rutrum mi suscipit bibendum rhoncus. Nunc nec placerat turpis. Vestibulum commodo nisi et magna sodales gravida. Ut non sapien libero. Duis non lectus porta lorem porta volutpat placerat vitae eros. Vestibulum id odio quis odio eleifend tincidunt.

							Sed quis finibus nibh, dapibus pellentesque leo. Donec eget blandit enim. Quisque id orci tellus. Sed tempus dui nec semper efficitur. Etiam ac felis enim. Praesent a ultrices turpis. Pellentesque sit amet sagittis mauris, eu rhoncus dolor. Aenean tincidunt magna ut massa varius rutrum. Pellentesque facilisis magna vel luctus pretium. Nulla tempor laoreet metus, dignissim tempor orci viverra a. Nunc in lacus eu justo feugiat aliquet. Maecenas libero elit, congue sed ipsum a, gravida iaculis leo. Maecenas rhoncus, risus at fermentum mattis, mauris justo rhoncus elit, quis rutrum lectus ex in risus. Etiam dignissim interdum est, id varius turpis ullamcorper eu. Aliquam quis lectus nec purus blandit venenatis. Aenean maximus magna eget purus sollicitudin consectetur.

							Pellentesque justo quam, sodales eget dui eget, sagittis fringilla augue. Vestibulum arcu dui, aliquet vitae fermentum condimentum, convallis eget diam. Duis fringilla vitae justo a ullamcorper. Sed interdum in sem at feugiat. Duis efficitur quis velit a interdum. Curabitur sit amet rhoncus nibh, vel tincidunt massa. Phasellus sed pellentesque diam. Pellentesque quis pharetra ex, id pellentesque lectus.',

			'News' => '<div class="ui two column grid">
					<div class="column"><h2 class="ui header"><i class="ui frog icon"></i> Pretty frog</h2>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus metus nisi, rhoncus at convallis a, mollis sollicitudin nunc. Quisque quis lorem vitae neque varius pulvinar. Nunc vel felis est. Donec ut diam tincidunt, porta dui sit amet, cursus erat. Quisque elementum justo id nunc ultricies, et tempus nulla consectetur. Quisque accumsan tempus pellentesque. Mauris lobortis nisi a justo blandit pellentesque. Nulla fringilla dui scelerisque, cursus nisl sed, malesuada felis. Integer imperdiet ut velit accumsan rhoncus. Nunc molestie dui sed urna auctor porttitor. Etiam sed enim sit amet ante auctor mollis. In hac habitasse platea dictumst. Aliquam non pulvinar nibh. Nam ac purus vitae sapien ultricies consectetur.
					</div>
					<div class="column"><h2 class="ui header"><i class="ui hippo icon"></i> Nice hippo</h2>
					Duis tempus sit amet nisl ut scelerisque. Ut a eros tincidunt, tempor nulla at, tristique dolor. Nulla ex massa, cursus et lobortis ac, dapibus vitae ipsum. Sed varius velit id ligula vulputate, id venenatis dui viverra. Donec sapien nisl, scelerisque et efficitur eget, finibus vel ex. Donec egestas tortor vitae feugiat aliquet. Quisque ultrices tempor vestibulum.

					Morbi nec venenatis eros. Fusce sed aliquam lectus. Sed aliquet ultrices malesuada. Nam varius, mi non interdum dignissim, leo quam volutpat sem, vel sollicitudin lacus ipsum non metus. Ut massa nibh, placerat vel neque nec, ornare mattis neque. In rutrum mi suscipit bibendum rhoncus. Nunc nec placerat turpis. Vestibulum commodo nisi et magna sodales gravida. Ut non sapien libero. Duis non lectus porta lorem porta volutpat placerat vitae eros. Vestibulum id odio quis odio eleifend tincidunt.
					</div>'
		];
	}
}

