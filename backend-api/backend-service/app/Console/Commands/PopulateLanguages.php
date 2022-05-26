<?php

namespace App\Console\Commands;

use App\Models\Language;
use Illuminate\Console\Command;

class PopulateLanguages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:languages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds languages';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Populating Languages all around the world...🌎🌍🌏');

        $languages = [
            ['alpha3' => 'aar', 'alpha2' => 'aa', 'english' => 'Afar'],
            ['alpha3' => 'abk', 'alpha2' => 'ab', 'english' => 'Abkhazian'],
            ['alpha3' => 'afr', 'alpha2' => 'af', 'english' => 'Afrikaans'],
            ['alpha3' => 'aka', 'alpha2' => 'ak', 'english' => 'Akan'],
            ['alpha3' => 'alb', 'alpha2' => 'sq', 'english' => 'Albanian'],
            ['alpha3' => 'amh', 'alpha2' => 'am', 'english' => 'Amharic'],
            ['alpha3' => 'ara', 'alpha2' => 'ar', 'english' => 'Arabic'],
            ['alpha3' => 'arg', 'alpha2' => 'an', 'english' => 'Aragonese'],
            ['alpha3' => 'arm', 'alpha2' => 'hy', 'english' => 'Armenian'],
            ['alpha3' => 'asm', 'alpha2' => 'as', 'english' => 'Assamese'],
            ['alpha3' => 'ava', 'alpha2' => 'av', 'english' => 'Avaric'],
            ['alpha3' => 'ave', 'alpha2' => 'ae', 'english' => 'Avestan'],
            ['alpha3' => 'aym', 'alpha2' => 'ay', 'english' => 'Aymara'],
            ['alpha3' => 'aze', 'alpha2' => 'az', 'english' => 'Azerbaijani'],
            ['alpha3' => 'bak', 'alpha2' => 'ba', 'english' => 'Bashkir'],
            ['alpha3' => 'bam', 'alpha2' => 'bm', 'english' => 'Bambara'],
            ['alpha3' => 'baq', 'alpha2' => 'eu', 'english' => 'Basque'],
            ['alpha3' => 'bel', 'alpha2' => 'be', 'english' => 'Belarusian'],
            ['alpha3' => 'ben', 'alpha2' => 'bn', 'english' => 'Bengali'],
            ['alpha3' => 'bih', 'alpha2' => 'bh', 'english' => 'Bihari languages'],
            ['alpha3' => 'bis', 'alpha2' => 'bi', 'english' => 'Bislama'],
            ['alpha3' => 'bos', 'alpha2' => 'bs', 'english' => 'Bosnian'],
            ['alpha3' => 'bre', 'alpha2' => 'br', 'english' => 'Breton'],
            ['alpha3' => 'bul', 'alpha2' => 'bg', 'english' => 'Bulgarian'],
            ['alpha3' => 'bur', 'alpha2' => 'my', 'english' => 'Burmese'],
            ['alpha3' => 'cat', 'alpha2' => 'ca', 'english' => 'Catalan; Valencian'],
            ['alpha3' => 'cha', 'alpha2' => 'ch', 'english' => 'Chinese'],
            ['alpha3' => 'chu', 'alpha2' => 'cu', 'english' => 'Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic'],
            ['alpha3' => 'chv', 'alpha2' => 'cv', 'english' => 'Chuvash'],
            ['alpha3' => 'cor', 'alpha2' => 'kw', 'english' => 'Cornish'],
            ['alpha3' => 'cos', 'alpha2' => 'co', 'english' => 'Corsican'],
            ['alpha3' => 'cre', 'alpha2' => 'cr', 'english' => 'Cree'],
            ['alpha3' => 'cze', 'alpha2' => 'cs', 'english' => 'Czech'],
            ['alpha3' => 'dan', 'alpha2' => 'da', 'english' => 'Danish'],
            ['alpha3' => 'div', 'alpha2' => 'dv', 'english' => 'Divehi; Dhivehi; Maldivian'],
            ['alpha3' => 'dut', 'alpha2' => 'nl', 'english' => 'Dutch; Flemish'],
            ['alpha3' => 'dzo', 'alpha2' => 'dz', 'english' => 'Dzongkha'],
            ['alpha3' => 'eng', 'alpha2' => 'en', 'english' => 'English'],
            ['alpha3' => 'epo', 'alpha2' => 'eo', 'english' => 'Esperanto'],
            ['alpha3' => 'est', 'alpha2' => 'et', 'english' => 'Estonian'],
            ['alpha3' => 'ewe', 'alpha2' => 'ee', 'english' => 'Ewe'],
            ['alpha3' => 'fao', 'alpha2' => 'fo', 'english' => 'Faroese'],
            ['alpha3' => 'fij', 'alpha2' => 'fj', 'english' => 'Fijian'],
            ['alpha3' => 'fin', 'alpha2' => 'fi', 'english' => 'Finnish'],
            ['alpha3' => 'fre', 'alpha2' => 'fr', 'english' => 'French'],
            ['alpha3' => 'fry', 'alpha2' => 'fy', 'english' => 'Western Frisian'],
            ['alpha3' => 'ful', 'alpha2' => 'ff', 'english' => 'Fulah'],
            ['alpha3' => 'geo', 'alpha2' => 'ka', 'english' => 'Georgian'],
            ['alpha3' => 'ger', 'alpha2' => 'de', 'english' => 'German'],
            ['alpha3' => 'gla', 'alpha2' => 'gd', 'english' => 'Gaelic; Scottish Gaelic'],
            ['alpha3' => 'gle', 'alpha2' => 'ga', 'english' => 'Irish'],
            ['alpha3' => 'glg', 'alpha2' => 'gl', 'english' => 'Galician'],
            ['alpha3' => 'glv', 'alpha2' => 'gv', 'english' => 'Manx'],
            ['alpha3' => 'gre', 'alpha2' => 'el', 'english' => 'Greek'],
            ['alpha3' => 'grn', 'alpha2' => 'gn', 'english' => 'Guarani'],
            ['alpha3' => 'guj', 'alpha2' => 'gu', 'english' => 'Gujarati'],
            ['alpha3' => 'hat', 'alpha2' => 'ht', 'english' => 'Haitian'],
            ['alpha3' => 'hau', 'alpha2' => 'ha', 'english' => 'Hausa'],
            ['alpha3' => 'heb', 'alpha2' => 'he', 'english' => 'Hebrew'],
            ['alpha3' => 'her', 'alpha2' => 'hz', 'english' => 'Herero'],
            ['alpha3' => 'hin', 'alpha2' => 'hi', 'english' => 'Hindi'],
            ['alpha3' => 'hmo', 'alpha2' => 'ho', 'english' => 'Hiri Motu'],
            ['alpha3' => 'hrv', 'alpha2' => 'hr', 'english' => 'Croatian'],
            ['alpha3' => 'hun', 'alpha2' => 'hu', 'english' => 'Hungarian'],
            ['alpha3' => 'ibo', 'alpha2' => 'ig', 'english' => 'Igbo'],
            ['alpha3' => 'ice', 'alpha2' => 'is', 'english' => 'Icelandic'],
            ['alpha3' => 'ido', 'alpha2' => 'io', 'english' => 'Ido'],
            ['alpha3' => 'iii', 'alpha2' => 'ii', 'english' => 'Sichuan Yi; Nuosu'],
            ['alpha3' => 'iku', 'alpha2' => 'iu', 'english' => 'Inuktitut'],
            ['alpha3' => 'ile', 'alpha2' => 'ie', 'english' => 'Interlingue'],
            ['alpha3' => 'ina', 'alpha2' => 'ia', 'english' => 'Interlingua'],
            ['alpha3' => 'ind', 'alpha2' => 'id', 'english' => 'Indonesian'],
            ['alpha3' => 'ipk', 'alpha2' => 'ik', 'english' => 'Inupiaq'],
            ['alpha3' => 'ita', 'alpha2' => 'it', 'english' => 'Italian'],
            ['alpha3' => 'jav', 'alpha2' => 'jv', 'english' => 'Javanese'],
            ['alpha3' => 'jpn', 'alpha2' => 'ja', 'english' => 'Japanese'],
            ['alpha3' => 'kal', 'alpha2' => 'kl', 'english' => 'Kalaallisut'],
            ['alpha3' => 'kan', 'alpha2' => 'kn', 'english' => 'Kannada'],
            ['alpha3' => 'kas', 'alpha2' => 'ks', 'english' => 'Kashmiri'],
            ['alpha3' => 'kau', 'alpha2' => 'kr', 'english' => 'Kanuri'],
            ['alpha3' => 'kaz', 'alpha2' => 'kk', 'english' => 'Kazakh'],
            ['alpha3' => 'khm', 'alpha2' => 'km', 'english' => 'Central Khmer'],
            ['alpha3' => 'kik', 'alpha2' => 'ki', 'english' => 'Kikuyu'],
            ['alpha3' => 'kin', 'alpha2' => 'rw', 'english' => 'Kinyarwanda'],
            ['alpha3' => 'kir', 'alpha2' => 'ky', 'english' => 'Kirghiz'],
            ['alpha3' => 'kom', 'alpha2' => 'kv', 'english' => 'Komi'],
            ['alpha3' => 'kon', 'alpha2' => 'kg', 'english' => 'Kongo'],
            ['alpha3' => 'kor', 'alpha2' => 'ko', 'english' => 'Korean'],
            ['alpha3' => 'kua', 'alpha2' => 'kj', 'english' => 'Kuanyama'],
            ['alpha3' => 'kur', 'alpha2' => 'ku', 'english' => 'Kurdish'],
            ['alpha3' => 'lao', 'alpha2' => 'lo', 'english' => 'Lao'],
            ['alpha3' => 'lat', 'alpha2' => 'la', 'english' => 'Latin'],
            ['alpha3' => 'lav', 'alpha2' => 'lv', 'english' => 'Latvian'],
            ['alpha3' => 'lim', 'alpha2' => 'li', 'english' => 'Limburgan'],
            ['alpha3' => 'lin', 'alpha2' => 'ln', 'english' => 'Lingala'],
            ['alpha3' => 'lit', 'alpha2' => 'lt', 'english' => 'Lithuanian'],
            ['alpha3' => 'ltz', 'alpha2' => 'lb', 'english' => 'Luxembourgish'],
            ['alpha3' => 'lub', 'alpha2' => 'lu', 'english' => 'Luba-Katanga'],
            ['alpha3' => 'lug', 'alpha2' => 'lg', 'english' => 'Ganda'],
            ['alpha3' => 'mac', 'alpha2' => 'mk', 'english' => 'Macedonian'],
            ['alpha3' => 'mah', 'alpha2' => 'mh', 'english' => 'Marshallese'],
            ['alpha3' => 'mal', 'alpha2' => 'ml', 'english' => 'Malayalam'],
            ['alpha3' => 'mao', 'alpha2' => 'mi', 'english' => 'Maori'],
            ['alpha3' => 'mar', 'alpha2' => 'mr', 'english' => 'Marathi'],
            ['alpha3' => 'may', 'alpha2' => 'ms', 'english' => 'Malay'],
            ['alpha3' => 'mlg', 'alpha2' => 'mg', 'english' => 'Malagasy'],
            ['alpha3' => 'mlt', 'alpha2' => 'mt', 'english' => 'Maltese'],
            ['alpha3' => 'mon', 'alpha2' => 'mn', 'english' => 'Mongolian'],
            ['alpha3' => 'nau', 'alpha2' => 'na', 'english' => 'Nauru'],
            ['alpha3' => 'nav', 'alpha2' => 'nv', 'english' => 'Navajo'],
            ['alpha3' => 'nbl', 'alpha2' => 'nr', 'english' => 'Ndebele'],
            ['alpha3' => 'nde', 'alpha2' => 'nd', 'english' => 'Ndebele'],
            ['alpha3' => 'ndo', 'alpha2' => 'ng', 'english' => 'Ndonga'],
            ['alpha3' => 'nep', 'alpha2' => 'ne', 'english' => 'Nepali'],
            ['alpha3' => 'nno', 'alpha2' => 'nn', 'english' => 'Norwegian Nynorsk'],
            ['alpha3' => 'nob', 'alpha2' => 'nb', 'english' => 'Bokmål, Norwegian'],
            ['alpha3' => 'nor', 'alpha2' => 'no', 'english' => 'Norwegian'],
            ['alpha3' => 'nya', 'alpha2' => 'ny', 'english' => 'Chichewa'],
            ['alpha3' => 'oci', 'alpha2' => 'oc', 'english' => 'Occitan'],
            ['alpha3' => 'oji', 'alpha2' => 'oj', 'english' => 'Ojibwa'],
            ['alpha3' => 'ori', 'alpha2' => 'or', 'english' => 'Oriya'],
            ['alpha3' => 'orm', 'alpha2' => 'om', 'english' => 'Oromo'],
            ['alpha3' => 'oss', 'alpha2' => 'os', 'english' => 'Ossetian'],
            ['alpha3' => 'pan', 'alpha2' => 'pa', 'english' => 'Panjabi; Punjabi'],
            ['alpha3' => 'per', 'alpha2' => 'fa', 'english' => 'Persian'],
            ['alpha3' => 'pli', 'alpha2' => 'pi', 'english' => 'Pali'],
            ['alpha3' => 'pol', 'alpha2' => 'pl', 'english' => 'Polish'],
            ['alpha3' => 'por', 'alpha2' => 'pt', 'english' => 'Portuguese'],
            ['alpha3' => 'pus', 'alpha2' => 'ps', 'english' => 'Pushto'],
            ['alpha3' => 'que', 'alpha2' => 'qu', 'english' => 'Quechua'],
            ['alpha3' => 'roh', 'alpha2' => 'rm', 'english' => 'Romansh'],
            ['alpha3' => 'rum', 'alpha2' => 'ro', 'english' => 'Romanian'],
            ['alpha3' => 'run', 'alpha2' => 'rn', 'english' => 'Rundi'],
            ['alpha3' => 'rus', 'alpha2' => 'ru', 'english' => 'Russian'],
            ['alpha3' => 'sag', 'alpha2' => 'sg', 'english' => 'Sango'],
            ['alpha3' => 'san', 'alpha2' => 'sa', 'english' => 'Sanskrit'],
            ['alpha3' => 'sin', 'alpha2' => 'si', 'english' => 'Sinhala'],
            ['alpha3' => 'slo', 'alpha2' => 'sk', 'english' => 'Slovak'],
            ['alpha3' => 'slv', 'alpha2' => 'sl', 'english' => 'Slovenian'],
            ['alpha3' => 'sme', 'alpha2' => 'se', 'english' => 'Northern Sami'],
            ['alpha3' => 'smo', 'alpha2' => 'sm', 'english' => 'Samoan'],
            ['alpha3' => 'sna', 'alpha2' => 'sn', 'english' => 'Shona'],
            ['alpha3' => 'snd', 'alpha2' => 'sd', 'english' => 'Sindhi'],
            ['alpha3' => 'som', 'alpha2' => 'so', 'english' => 'Somali'],
            ['alpha3' => 'sot', 'alpha2' => 'st', 'english' => 'Sotho'],
            ['alpha3' => 'spa', 'alpha2' => 'es', 'english' => 'Spanish'],
            ['alpha3' => 'srd', 'alpha2' => 'sc', 'english' => 'Sardinian'],
            ['alpha3' => 'srp', 'alpha2' => 'sr', 'english' => 'Serbian'],
            ['alpha3' => 'ssw', 'alpha2' => 'ss', 'english' => 'Swati'],
            ['alpha3' => 'sun', 'alpha2' => 'su', 'english' => 'Sundanese'],
            ['alpha3' => 'swa', 'alpha2' => 'sw', 'english' => 'Swahili'],
            ['alpha3' => 'swe', 'alpha2' => 'sv', 'english' => 'Swedish'],
            ['alpha3' => 'tah', 'alpha2' => 'ty', 'english' => 'Tahitian'],
            ['alpha3' => 'tam', 'alpha2' => 'ta', 'english' => 'Tamil'],
            ['alpha3' => 'tat', 'alpha2' => 'tt', 'english' => 'Tatar'],
            ['alpha3' => 'tel', 'alpha2' => 'te', 'english' => 'Telugu'],
            ['alpha3' => 'tgk', 'alpha2' => 'tg', 'english' => 'Tajik'],
            ['alpha3' => 'tgl', 'alpha2' => 'tl', 'english' => 'Tagalog'],
            ['alpha3' => 'tha', 'alpha2' => 'th', 'english' => 'Thai'],
            ['alpha3' => 'tib', 'alpha2' => 'bo', 'english' => 'Tibetan'],
            ['alpha3' => 'tir', 'alpha2' => 'ti', 'english' => 'Tigrinya'],
            ['alpha3' => 'ton', 'alpha2' => 'to', 'english' => 'Tonga'],
            ['alpha3' => 'tsn', 'alpha2' => 'tn', 'english' => 'Tswana'],
            ['alpha3' => 'tso', 'alpha2' => 'ts', 'english' => 'Tsonga'],
            ['alpha3' => 'tuk', 'alpha2' => 'tk', 'english' => 'Turkmen'],
            ['alpha3' => 'tur', 'alpha2' => 'tr', 'english' => 'Turkish'],
            ['alpha3' => 'twi', 'alpha2' => 'tw', 'english' => 'Twi'],
            ['alpha3' => 'uig', 'alpha2' => 'ug', 'english' => 'Uighur'],
            ['alpha3' => 'ukr', 'alpha2' => 'uk', 'english' => 'Ukrainian'],
            ['alpha3' => 'urd', 'alpha2' => 'ur', 'english' => 'Urdu'],
            ['alpha3' => 'uzb', 'alpha2' => 'uz', 'english' => 'Uzbek'],
            ['alpha3' => 'ven', 'alpha2' => 've', 'english' => 'Venda'],
            ['alpha3' => 'vie', 'alpha2' => 'vi', 'english' => 'Vietnamese'],
            ['alpha3' => 'vol', 'alpha2' => 'vo', 'english' => 'Volapük'],
            ['alpha3' => 'wel', 'alpha2' => 'cy', 'english' => 'Welsh'],
            ['alpha3' => 'wln', 'alpha2' => 'wa', 'english' => 'Walloon'],
            ['alpha3' => 'wol', 'alpha2' => 'wo', 'english' => 'Wolof'],
            ['alpha3' => 'xho', 'alpha2' => 'xh', 'english' => 'Xhosa'],
            ['alpha3' => 'yid', 'alpha2' => 'yi', 'english' => 'Yiddish'],
            ['alpha3' => 'yor', 'alpha2' => 'yo', 'english' => 'Yoruba'],
            ['alpha3' => 'zha', 'alpha2' => 'za', 'english' => 'Zhuang'],
            ['alpha3' => 'zul', 'alpha2' => 'zu', 'english' => 'Zulu'],
        ];

        foreach ($languages as $language) {
            Language::firstOrCreate([
                'alpha3' => $language['alpha3'],
                'alpha2' => $language['alpha2'],
                'english' => $language['english'],
            ]);
        }


        $this->info('Sweet! Languages populated 🔥');

        return 0;
    }
}
