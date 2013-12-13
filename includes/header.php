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
	
	$pages = array(
		"solutions" => array(
			"name" => "Solutions",
			"description" => "Solutions description",
			"children" => array(
				"omnichannel" => array(
					"name" => "omnichannel",
					"description" => "Omnichannel description",
				),
				"mobile" => array(
					"name" => "mobile",
					"description" => "Mobile description",
				),
				"international" => array(
					"name" => "international",
					"description" => "International description",
				),
				"operational-excellence" => array(
					"name" => "Operational Excellence",
					"description" => "Operational Excellence description",
				),
				"customer-engagement" => array(
					"name" => "Customer Engagement",
					"description" => "Customer Engagement description",
				)
			)
		),
		"products" => array(
			"name" => "products",
			"description" => "Our full product set",
			"children" => array(
				"store-and-pos" => array(
					"name" => "store &amp; pos",
					"description" => "Store &amp; Pos description",
				),
				"ecommerce" => array(
					"name" => "ecommerce",
					"description" => "Ecommerce description",
				),
				"supply-chain" => array(
					"name" => "supply chain",
					"description" => "Supply chain description",
				),
				"crm-and-loyalty" => array(
					"name" => "CRM &amp; Loyalty",
					"description" => "Description of all CRM &amp; loyalty products and tools.",
				),
				"retail-staff" => array(
					"name" => "retail staff",
					"description" => "Retail Staff description",
				),
				"managed-services" => array(
					"name" => "managed services",
					"description" => "Managed Services description",
				),
				"networks-wifi-and-infrastructure" => array(
					"name" => "networks, wifi &amp; infrastructure",
					"description" => "Networks, Wifi &amp; Infrastructure description",
				),
				"digital-marketing" => array(
					"name" => "Digital Marketing",
					"description" => "Digital Marketing description",
				)
			)
		),
		"news" => array(
			"name" => "news &amp; resources",
			"description" => "News &amp; Resources description",
			"children" => array(
				"events" => array(
					"name" => "events",
					"description" => "Events description",
				),
				"blog" => array(
					"name" => "blog",
					"description" => "Blog description",
				),
				"cases-and-whitepapers" => array(
					"name" => "cases &amp; whitepapers",
					"description" => "Whitepapers description",
				),
				"press-releases" => array(
					"name" => "In the news",
					"description" => "In the news description",
				),
				"videos" => array(
					"name" => "Videos",
					"description" => "Videos description",
				)
			)
		),
		"about" => array(
			"name" => "about us",
			"description" => "About us description",
			"children" => array(
				"customers" => array(
					"name" => "customers",
					"description" => "Customers description",
				),
				"partners" => array(
					"name" => "partners",
					"description" => "Partners description",
				),
				"portfolio" => array(
					"name" => "Projects",
					"description" => "Portfolio description",
				),
				"awards" => array(
					"name" => "awards",
					"description" => "Awards description",
				),
				"careers" => array(
					"name" => "careers",
					"description" => "Careers description",
				)
			)
		),
		"contact" => array(
			"name" => "Contact us",
			"description" => "We'd like to hear from you",
			),
		"search" => array(
			"name" => "search",
			"description" => "Search results",
			)
	);
 ?>

<header class="clearfix">
	<a href="/" id="logo"><img src="/images/new-bt-expedite-logo.png" alt="BT Expedite"></a>
	<nav class="main_navigation">
		<?php print_menu($pages,$parent); ?>
	</nav>
</header>