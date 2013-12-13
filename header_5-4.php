<?php
	/** print the menu level by level */
	function print_menu($pages, $parent) {
		echo '<ul class="clearfix' . (!empty($parent) ? ' subMenu' : '') . '">' ;
			foreach (array_keys($pages) as $pageName) {
				$pageNameStr = $pageName;
				if (!empty($pages[$pageName]["name"])) {
					$pageNameStr = $pages[$pageName]["name"];
				}
				$link = $parent ? $parent . '/' . $pageName : $pageName;
				 echo '<li>';
				 echo '<a href="/' . $link . '">' . $pageNameStr . '</a>';
					 if (!empty($pages[$pageName]["children"])) {
					 	print_menu($pages[$pageName]["children"], $link);
					 }
				echo '</li>';
			}
		echo '</ul>';
	}


	$pages = [
		"solutions" => [
			"name" => "Solutions",
			"description" => "Solutions description",
			"children" => [
				"omnichannel" => [
					"name" => "omnichannel",
					"description" => "Omnichannel description",
				],
				"mobile" => [
					"name" => "mobile",
					"description" => "Mobile description",
				],
				"international" => [
					"name" => "international",
					"description" => "International description",
				],
				"operational-excellence" => [
					"name" => "Operational Excellence",
					"description" => "Operational Excellence description",
				],
				"customer-engagement" => [
					"name" => "Customer Engagement",
					"description" => "Customer Engagement description",
				]
			]
		],
		"products" => [
			"name" => "products",
			"description" => "Our full product set",
			"children" => [
				"store-and-pos" => [
					"name" => "store &amp; pos",
					"description" => "Store &amp; Pos description",
				],
				"ecommerce" => [
					"name" => "ecommerce",
					"description" => "Ecommerce description",
				],
				"supply-chain" => [
					"name" => "supply chain",
					"description" => "Supply chain description",
				],
				"crm-and-loyalty" => [
					"name" => "CRM &amp; Loyalty",
					"description" => "Description of all CRM &amp; loyalty products and tools.",
				],
				"retail-staff" => [
					"name" => "retail staff",
					"description" => "Retail Staff description",
				],
				"managed-services" => [
					"name" => "managed services",
					"description" => "Managed Services description",
				],
				"networks-wifi-and-infrastructure" => [
					"name" => "networks, wifi &amp; infrastructure",
					"description" => "Networks, Wifi &amp; Infrastructure description",
				],
				"digital-marketing" => [
					"name" => "Digital Marketing",
					"description" => "Digital Marketing description",
				]
			]
		],
		"news" => [
			"name" => "news &amp; resources",
			"description" => "News &amp; Resources description",
			"children" => [
				"events" => [
					"name" => "events",
					"description" => "Events description",
				],
				"blog" => [
					"name" => "blog",
					"description" => "Blog description",
				],
				"cases-and-whitepapers" => [
					"name" => "case studies",
					"description" => "Case studies description",
				],
				"whitepapers" => [
					"name" => "whitepapers",
					"description" => "Whitepapers description",
				],
				"press-releases" => [
					"name" => "In the news",
					"description" => "In the news description",
				],
				"videos" => [
					"name" => "Videos",
					"description" => "Videos description",
				],
				"enews" => [
					"name" => "E-Newsletter",
					"description" => "Register to recieve regular imdustry related news",
				]
			]
		],
		"about" => [
			"name" => "about us",
			"description" => "About us description",
			"children" => [
				"customers" => [
					"name" => "customers",
					"description" => "Customers description",
				],
				"partners" => [
					"name" => "partners",
					"description" => "Partners description",
				],
				"portfolio" => [
					"name" => "Projects",
					"description" => "Portfolio description",
				],
				"awards" => [
					"name" => "awards",
					"description" => "Awards description",
				],
				"careers" => [
					"name" => "careers",
					"description" => "Careers description",
				]
			]
		],
		"search" => [
			"name" => "search",
			"description" => "Search results",
			],
		"contact" => [
			"name" => "Contact us",
			"description" => "We'd like to hear from you",
			]
	];
 ?>




<header class="clearfix">
	<a href="/" id="logo"><img src="/images/new-bt-expedite-logo.png"></a>
	<nav class="main_navigation">
		<?php print_menu($pages); ?>
	</nav>
</header>

<?php include('parts/page-options.php'); ?>
