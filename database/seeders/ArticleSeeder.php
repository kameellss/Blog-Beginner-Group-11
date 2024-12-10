<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Get the Technology category ID
        $categoryId = Category::where('name', 'General')->first()->id;

        // Get user IDs
        $userIds = User::pluck('id')->toArray();

        // Define hardcoded articles
        $articles = [
            [
                'title' => 'nasi babi ',
                'full_text'
                => 'soto goreng.
                ',
                'image' => null,  // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'All About Makeup: Types and Application Techniques',
                'full_text' => 'Blockchain technology is quickly becoming one of the most revolutionary innovations in the field of digital security. At its core, blockchain offers a decentralized and tamper-proof ledger that records transactions across a network of computers, making it virtually impossible to alter or hack. This immutability is a game-changer for industries that rely on secure and transparent record-keeping, such as finance, healthcare, and logistics. By removing the need for intermediaries like banks or third parties, blockchain enables faster and more secure transactions, reducing the risk of fraud and human error.

                In the finance sector, blockchains impact is already being felt with the rise of cryptocurrencies like Bitcoin and Ethereum. These decentralized currencies are not controlled by any central authority, offering users greater privacy and autonomy over their financial transactions. Additionally, blockchain-based smart contracts enable automatic execution of agreements, reducing the need for manual oversight and ensuring that terms are met. These advancements are disrupting traditional banking systems and paving the way for a new era of financial innovation.

                Blockchain is also making waves in healthcare, where it is being used to securely store patient records and streamline medical supply chains. By providing a transparent and immutable record of patient data, blockchain ensures that medical histories are accurate and accessible to healthcare providers, improving treatment accuracy and reducing fraud. In logistics, blockchain is being utilized to track the movement of goods, ensuring transparency in the supply chain and reducing the risk of counterfeit products.

                However, despite its immense potential, blockchain faces several challenges that need to be addressed for widespread adoption. One of the main hurdles is scalability, as the current infrastructure of many blockchain networks struggles to handle high transaction volumes. Additionally, there are concerns about the energy consumption of blockchain systems, particularly in cryptocurrency mining. As blockchain continues to evolve, it will be essential to find solutions to these issues to ensure its viability as a secure, efficient, and sustainable technology for the future.',
                'image' => null,  // Placeholder image for Blockchain
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'sotogorengg',
                'full_text' => 'The advent of 5G technology is set to transform the tech industry, ushering in a new era of connectivity and performance. With faster download and upload speeds, lower latency, and the ability to connect more devices simultaneously, 5G is expected to unlock a wide range of innovations across various sectors. In the realm of the Internet of Things (IoT), 5Gs speed and reliability will enable smarter cities, with connected infrastructure, vehicles, and devices working seamlessly together. This enhanced connectivity will lead to more efficient urban planning, improved traffic management, and better resource allocation.

                5G will also play a crucial role in the development of augmented reality (AR) and virtual reality (VR) technologies. The high bandwidth and low latency of 5G networks will provide the foundation for more immersive and interactive AR and VR experiences. These advancements will revolutionize industries like gaming, entertainment, and education, offering users unprecedented levels of engagement. In the healthcare sector, 5Gs ability to transmit large amounts of data quickly and with minimal delay will facilitate the growth of telemedicine, remote surgery, and real-time monitoring of patients.

                While the potential of 5G is vast, there are several challenges that must be addressed for its widespread adoption. One of the main obstacles is the significant infrastructure investment required to roll out 5G networks, particularly in rural or underserved areas. Building the necessary 5G infrastructure, including small cell towers and fiber-optic cables, will require substantial resources and time. Furthermore, concerns about the security and privacy of 5G networks need to be carefully considered as the technology becomes more integrated into critical systems and daily life.

                As we transition to a 5G-driven world, it will be essential to navigate these challenges while harnessing the full potential of the technology. 5G promises to reshape industries and improve the way we live, work, and communicate, but its successful implementation will require collaboration between governments, businesses, and technology providers to ensure a secure and equitable rollout.',
                'image' => null,  // Placeholder image for 5G
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'Virtual Reality: A New Era of Gaming',
                'full_text' => 'Virtual Reality (VR) is revolutionizing the gaming industry, offering players an unprecedented level of immersion in digital worlds. By wearing a VR headset, players can experience games in 360 degrees, interact with environments, and feel as though they are truly inside the game. This technology has drastically changed how games are played, from traditional flat-screen experiences to fully interactive virtual worlds. The growing adoption of VR in gaming is reshaping the industry, with developers creating more complex and lifelike experiences that push the boundaries of what is possible.

                The evolution of VR technology has led to significant advancements in hardware and software, making VR gaming more accessible and realistic than ever before. The latest VR headsets feature improved graphics, better motion tracking, and wireless connectivity, reducing the barriers to entry for players. Moreover, the rise of VR gaming platforms, such as Oculus Rift and PlayStation VR, has made it easier for gamers to access high-quality virtual reality experiences from the comfort of their homes. These advancements are driving innovation in game development, as creators look for new ways to engage players and deliver unique experiences.

                While VR gaming continues to evolve, there are still challenges that developers face in creating truly seamless and lifelike experiences. One of the biggest obstacles is motion sickness, which can occur when there is a disconnect between the players movements and what they see in the virtual world. To address this, developers are focusing on improving the realism of movement and interactions, as well as minimizing latency to create smoother experiences. Another challenge is the cost of VR equipment, which can be prohibitive for some players. As technology advances, it is expected that the cost of VR headsets and accessories will decrease, making the technology more accessible to a wider audience.

                Beyond gaming, VR has the potential to revolutionize other industries such as education, healthcare, and entertainment. In education, VR can create immersive learning experiences, allowing students to explore historical events, conduct science experiments, or practice complex procedures in a virtual environment. In healthcare, VR is being used for pain management, physical therapy, and even surgical training. As VR technology continues to improve and become more affordable, its applications will expand, providing new opportunities for innovation across various sectors. The future of VR is incredibly promising, with endless possibilities for how it can transform entertainment, education, and beyond.',
                'image' => null,  // Placeholder image for VR
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ], 
            [
                'title' => 'Tren Media Sosial Bakal Melejit 2025 Versi Hootsuite',
                'full_text'
                => '1. Lebih dari 60 persen konten sosial kini berfokus pada hiburan, pendidikan, atau informasi
                Tahun depan, tren eksperimen konten di media sosial bakal mengalami transformasi besar yang mencerminkan perubahan cara organisasi berinteraksi dengan audiens mereka. Salah satu perubahan utama adalah keberanian tim media sosial untuk mengeksplorasi kreativitas mereka lebih dalam.
                
                2. Sekitar 62 persen profesional media sosial kini memanfaatkan alat social listening
                Pada 2025, social listening (mendengarkan percakapan di media sosial) semakin menjadi kunci dalam kesuksesan social marketing. Dulu, social listening hanya dipandang sebagai cara untuk memantau pembicaraan mengenai merek. Namun, sekarang ia telah berkembang menjadi alat yang lebih canggih dan integral dalam strategi pemasaran. 

                3. 83 persen marketer kini mengandalkan AI untuk menghasilkan lebih banyak konten
                Generative AI yang dulu dianggap dengan keraguan oleh banyak social media marketer kini telah diterima sebagai alat yang sangat berharga dalam dunia media sosial. Pada 2024, penggunaan AI untuk pembuatan konten sosial telah mengalami perkembangan pesat, tidak hanya di perusahaan besar, tetapi juga di berbagai sektor, termasuk yang paling diawasi ketat seperti pemerintah dan kesehatan
                ',
                'image' => null,  // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'The Future of AI in Technology',
                'full_text'
                => 'The future of Artificial Intelligence (AI) is poised to bring transformative changes across a wide range of industries. As AI continues to advance, its capabilities in natural language processing (NLP) are revolutionizing the way we interact with machines. AI-powered virtual assistants and chatbots are becoming more sophisticated, enabling businesses to offer improved customer support and personalized experiences.

                    In the realm of autonomous systems, AI is making significant strides in transforming industries such as transportation. Self-driving vehicles, powered by machine learning algorithms, are expected to reduce traffic accidents, optimize routes, and increase fuel efficiency. AI is also playing a pivotal role in supply chain optimization, using predictive analytics to anticipate demand, reduce waste, and improve efficiency.

                    Despite its potential, the future of AI also presents challenges that need to be addressed. One major concern is the ethical implications of AI, particularly in areas such as privacy, data security, and algorithmic bias. As AI becomes more integrated into daily life, there is a growing need for regulations and guidelines to ensure that these technologies are used responsibly. Additionally, job displacement due to automation is a pressing issue, with AI potentially replacing human workers in sectors like manufacturing and customer service.

                    As we look to the future, AI potential to drive progress is undeniable, but careful consideration must be given to its societal impact. AIs influence will continue to grow, but we must navigate the ethical, economic, and regulatory challenges to ensure that its benefits are maximized while minimizing any negative consequences.
                    ',
                'image' => null,  // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'Rekomendasi Game dengan Visual 3D di PlayStation',
                'full_text'
                => '1. Final Fantasy
                Dari semua game Final Fantasy di PlayStation, Final Fantasy IX jadi game yang memiliki visual terbaik.
                Game ini memiliki dunia yang indah dengan visual 3D yang lebih halus.
                Tiap area yang kamu kunjungi akan memberikan perasaan berbeda saat memainkannya.
                
                
                2. Crash Bandicoot: Warped (1998)
                Crash Bandicoot: Warped jadi game ketiga dari seri Crash Bandicoot di PlayStation.
                Game ini menghadirkan dunia yang lebih halus dan desain karakter yang tidak terlalu kaku.
                Tiap level dari game ini juga sangat bervariasi dan menantang.
                ',
                'image' => null, // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'Smartwatch Xiaomi di Akhir 2024, Bantu Lebih Produktif',
                'full_text'
                => '1. Redmi Watch 5 Active
                Punya harga sekitar Rp400 ribuan, Redmi Watch 5 Active menawarkan lebih dari sekadar fungsi dasar smartwatch. Dilengkapi dengan layar LCD 2,0 inci yang nyaman dilihat sepanjang hari dan baterai awet hingga 18 hari, kamu tak perlu khawatir kehabisan daya saat menggunakan smartwatch ini.
                
                2. Redmi Watch 5 Lite
                Untuk kamu yang ingin smartwatch murah dengan layar lebih tajam, Redmi Watch 5 Lite tentu boleh banget dilirik, ya!
                ',
                'image' => null,  // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],
            [
                'title' => 'Rekap Smarthphone Xiaomi Terbaru di Indonesia Selama 2024',
                'full_text'
                => '1. Xiaomi Redmi A3
                Untuk kamu yang ingin smartwatch murah dengan layar lebih tajam, Redmi Watch 5 Lite tentu boleh banget dilirik, ya!

                2. Xiaomi Redmi Note 13 AG
                Pada Februari 2024, Xiaomi meluncurkan lima anggota Redmi Note 13 series sekaligus. Model yang paling murah adalah Redmi Note 13 4G
                ',
                'image' => null, // Placeholder image for AI
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Technology category
            ],

        ];

        // Create articles and assign tags
        foreach ($articles as $articleData) {
            $article = Article::create($articleData);

            // Assign random tags to each article (2 tags per article)
            $tagIds = Tag::pluck('id')->toArray(); // Get all tag IDs
            $randomTags = array_rand(array_flip($tagIds), 2); // Pick 2 random tags for each article
            foreach ((array) $randomTags as $tagId) {
                $article->tags()->attach($tagId);
            }
        }
    }
}
