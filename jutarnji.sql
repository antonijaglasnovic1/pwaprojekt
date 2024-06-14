-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jutarnji`
--

-- --------------------------------------------------------

--
-- Table structure for table `jutarnji`
--

CREATE TABLE `jutarnji` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jutarnji`
--

INSERT INTO `jutarnji` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(18, '26.05.2024.', 'Watch Sabrina Carpenter Perform “Espresso,” “Feather,” and “Nons', 'The pop star also played Daphne in a Scooby-Doo-themed skit with host Jake Gyllenhaal', 'Sabrina Carpenter was the musical guest on last night’s episode of Saturday Night Live, hosted by Jake Gyllenhaal. She performed her breakout single “Espresso,” as well as a medley merging her songs “Feather” and “Nonsense,” both of which appear on her 2022 deluxe album, Emails I Can’t Send Fwd:. The pop star also played Daphne in a Scooby-Doo-themed skit, alongside host Jake Gyllenhaal as Fred and cast members Sarah Sherman as Velma, Mikey Day as Shaggy, and Andrew Dismukes as an animated Scooby-Doo. Watch Carpenter’s performances, that sketch, and her SNL promo video with Gyllenhaal and Bowen Yang, below.\r\n\r\nThis past episode was the finale of Saturday Night Live’s Season 49. Previous musical guests this season included Vampire Weekend, Billie Eilish, Olivia Rodrigo, Boygenius, Bad Bunny, Ice Spice, Travis Scott, Dua Lipa, 21 Savage, Ariana Grande, Kacey Musgraves, Foo Fighters, Raye, Chris Stapleton, Reneé Rapp, Jennifer Lopez, Justin Timberlake, Noah Kahan, and Tate McRae.', 'sabrina1.jpeg', 'celebrities', 0),
(25, '2024-05-27', 'What is the boyfriend blush makeup trend?', 'Fresh faced? Experimenting with the ‘boyfriend blush’ trend that’s all over my TikTok', 'The makeup trend speaks to blush applied in a way that emulates the face of a flustered man – specifically your boyfriend – right after they\\\'ve finished exercising. Instead of the apples of the cheek, \\\'boyfriend blush\\\' is applied lower on the face, beneath the cheekbones from the ear towards the nose. The idea is that it looks sporty, a little ruddy. The boyfriend blush poster boys are, unsurprisingly, Harry and Will as well as their mum, the late Princess Diana.It\\\'s not exactly revolutionary — low blush placement and the idea of a natural \\\'flush\\\' have long been used editorially and on the runway (actually, it was a feature at AFW, namely Rory William Docherty and All Is A Gentle Spring). But I love the internet and its ability to hyper-fixate on fun makeup regardless of it being repurposed or not.\\r\\n\\r\\n \\r\\n\\r\\nDespite my lack of technical skills, I tried boyfriend blush and loved the way it turned out. I think it looks more natural when you take any excess product across the bridge of your nose, as well. Some might argue this is more of a sunburnt look, but when we blush naturally, our blood vessels dilate with no discernible beginning or end point. And I\\\'m here for anything that makes me look fresh and youthful.\\r\\n\\r\\nAs for the product you use, it\\\'s entirely up to you. I love creams; I think the application is easier and prefer a dewy finish. The tone you opt for also depends on your complexion, but a sheer raspberry or  true cool pink is a good place to start.', 'images.jpeg', 'makeup', 0),
(33, '2024-06-10', 'Gracie Abrams-Close to you', 'I\\\'m Really Grateful for the Encouragement', 'Gracie Abrams fans have finally gotten their wish!\\r\\n\\r\\nOn Friday, June 7, the 24-year-old singer finally released “Close to You” after first teasing the song when she was only 16. In an Instagram post announcing the release date, Abrams previously said that, though she had penned the song so long ago, the fans “cared about it enough for us to revisit the song seven years later.”\\r\\n\\r\\nOnce the song was released, Abrams shared another message in her Instagram Stories, writing, \\\"hiiiii Close to Youuuuuu hi after seven years hellooooooo :).\\\"\\r\\n\\r\\n\\\"After seven years of sitting with the \\\'Close to You\\\' demo, it finally felt right to rework and include on this album,\\\" Abrams said in a press release. \\\"I\\\'m really grateful for the encouragement from everyone online who let me know they still want to hear the song after all this time — it makes me want to dance with them, and I can’t wait till we get to do that.\\\"\\r\\n\\r\\nFans also celebrated the song\\\'s official release after waiting for so long. \\\"Real ones have known this gem for years,\\\" one fan wrote in the video\\\'s comment section on YouTube. \\\"This one is for the girls that have been waiting 7 years for this moment,\\\" another wrote. \\\"WAITED YEARS FOR THIS FINALLY,\\\" one added.\\r\\n\\r\\nFans first fell in love with the track when Abrams posted a clip playing the song on the piano to her Instagram in 2017, and again when she posted a snippet of a demo of the song in 2018.', 'Gracie (1).jpg', 'celebrities', 0),
(34, '2024-06-10', 'Your grandma’s foundation?', 'You (or a parent!) might just have one of these tried-and-true picks in your cabinet already.', 'Nowadays, it seems that every trend is backed by nostalgia. We\\\'ve seen capris make a comeback and even the rebirth of jelly sandals. But while fashion trends seem to come and go, there are quite a few beauty products that have remained consistent through the ages, having been passed down through the generations as tried-and-true must-haves.\\r\\n\\r\\nFor example, I grew up watching my grandfather use a mascara wand to \\\"dye\\\" his mustache. And decades later, I use the same product to coat my lashes — it is that good! That\\\'s the essence of a timeless product: These classics remain a staple for a reason.\\r\\n\\r\\nFrom this list, you might recognize a few products from your grandparents\\\' or parent\\\'s cabinets. And highlighting each item is NewBeauty\\\'s Senior Editor-At-Large Sarah Eggenberger, who recently shared with TODAY why these products continue to be staples years after their release. Plus, we included some of our own favorites.\\r\\n\\r\\n', 'soft-glam-makeup-inspo-1628692087.png', 'makeup', 0),
(35, '2024-06-10', 'Hailey Bieber on Pocket Blush', 'Rhode’s further push into makeup', 'Hailey Bieber has mastered the art of the tease.\\r\\n\\r\\nFor months, the founder has had fans eagerly speculating and posting about when her 2-year-old beauty brand, Rhode, would introduce Blush. Bieber has over 52 million followers on Instagram, over 12 million on TikTok and over 2 million on YouTube.\\r\\n\\r\\nEarly lab samples of the cream stick-format blush showed up in Bieber’s Instagram posts back in March, and she has since continued to post versions of the product as she’s developed it. “This blush has been a two-year process,” she told Glossy via Zoom last week. “I really wanted us to take our time with it. There are so many good blushes on the market that I wanted us to come with our own specific point of view.”\\r\\n\\r\\nThe result is Pocket Blush — a “hybrid product,” that, like Rhode’s other offerings, is “skin-first” for a “dewy, glowy, gorgeous-on-the-go” look, Bieber said. The product is infused with peptides, like Rhode’s serum and its hero Peptide Lip Treatment and Peptide Lip Tint, as well as tamanu oil. Bieber wanted a cream blush that would “give you a glow and also last, [and give a] really beautiful, natural-looking flush to the cheeks,” she said. “We worked very hand-in-hand with the lab to create to create this blush.”\\r\\n\\r\\n“There’s real artistry makeup and then there are things that are more for everyday and easy-to-apply, [like a product offering a] flush of color. That’s what this is,” Bieber said of Pocket Blush, which comes in six shades and will sell for $24 each, like the rest of the brand’s products, via Rhodeskin.com.\\r\\n\\r\\n', 'RHODE 170124 18082-SHOT-1-5-048-049_v1_LR_sRGB_L.webp', 'makeup', 0),
(36, '2024-06-10', '“Lonely Dancers”: Conan Gray', 'On Feb. 9, Conan Gray released his latest single titled “Lonely Dancers,”', 'Before listening, I was expecting a slow metaphoric ballad focused on Gray’s strong vocals, his signature, but the song turned out to be just the opposite. It was a sharp turn away from his previous album, which had a deeper and slower rhythm; some of my favorite songs were “Family Line,” “Astronomy” and “People Watching.” Based on the name itself, I was expecting a rhythm and lyrics similar to “Writer in the Dark” by Lorde, another one of my personal favorites, or “Bejeweled” by Taylor Swift.\\\\r\\\\n\\\\r\\\\nHowever, the song itself was lively, upbeat and retro-sounding, with underlying tones of heartbreak, melancholy and nostalgia. It featured the early and often rebound stage of a breakup, as the lyrics depicted distracting oneself with dancing so as not to cry. The vocal range was lower than his previous albums and overall more diverse. The sound itself was quite lonely and reminiscent of a song you would hear in “Stranger Things” or at your local bowling alley. \\\\r\\\\n\\\\r\\\\nDespite the lively and upbeat music, the lyricism fell short for me. I walked in with high expectations because of Gray’s strong and unparalleled ability to describe teenage emotions in a beautiful and heart-wrenching way but walked out feeling simply unfulfilled. Being only two and a half minutes, the song seemed to cut off short, was rather repetitive and didn’t feature as many lyrics as I would have expected or liked. Known for his expert lyrics, Gray is often compared with the likes of Swift and Olivia Rodrigo, but this song just did not stick out to me. While synth-pop seems to be a trend with the release of “Midnights” by Swift and her upcoming album, “The Tortured Poet’s Department,” “Lonely Dancers” fits in perfectly in terms of sound. But the lyricism is where I would like to see more experimentation rather than repetition. I think what was missing for me the most was personality. Almost all of Gray’s songs, such as “Heather” and “Crush Culture,” come from a deep place in the artist’s heart, being deeply personal yet relatable at the same time. This song almost felt as if he was trying to produce a TikTok hit, and lacked the reliability and lyricism. \\\\r\\\\n\\\\r\\\\nIn conclusion, while “Lonely Dancers” brought a unique and nuanced approach to Gray’s discography and sound, it fell short regarding lyrics, personality and relatability. However, I do hope the rest of the album presents a more “Midnights” approach with a balance between strong lyricism and upbeat sounds, something one could actually dance to while trying to hold back an extra tears.', 'conan.jpeg', 'celebrities', 0),
(37, '2024-06-10', '“Lonely Dancers”: Conan Gray', 'On Feb. 9, Conan Gray released his latest single titled “Lonely Dancers,”', 'Before listening, I was expecting a slow metaphoric ballad focused on Gray’s strong vocals, his signature, but the song turned out to be just the opposite. It was a sharp turn away from his previous album, which had a deeper and slower rhythm; some of my favorite songs were “Family Line,” “Astronomy” and “People Watching.” Based on the name itself, I was expecting a rhythm and lyrics similar to “Writer in the Dark” by Lorde, another one of my personal favorites, or “Bejeweled” by Taylor Swift.\\\\r\\\\n\\\\r\\\\nHowever, the song itself was lively, upbeat and retro-sounding, with underlying tones of heartbreak, melancholy and nostalgia. It featured the early and often rebound stage of a breakup, as the lyrics depicted distracting oneself with dancing so as not to cry. The vocal range was lower than his previous albums and overall more diverse. The sound itself was quite lonely and reminiscent of a song you would hear in “Stranger Things” or at your local bowling alley. \\\\r\\\\n\\\\r\\\\nDespite the lively and upbeat music, the lyricism fell short for me. I walked in with high expectations because of Gray’s strong and unparalleled ability to describe teenage emotions in a beautiful and heart-wrenching way but walked out feeling simply unfulfilled. Being only two and a half minutes, the song seemed to cut off short, was rather repetitive and didn’t feature as many lyrics as I would have expected or liked. Known for his expert lyrics, Gray is often compared with the likes of Swift and Olivia Rodrigo, but this song just did not stick out to me. While synth-pop seems to be a trend with the release of “Midnights” by Swift and her upcoming album, “The Tortured Poet’s Department,” “Lonely Dancers” fits in perfectly in terms of sound. But the lyricism is where I would like to see more experimentation rather than repetition. I think what was missing for me the most was personality. Almost all of Gray’s songs, such as “Heather” and “Crush Culture,” come from a deep place in the artist’s heart, being deeply personal yet relatable at the same time. This song almost felt as if he was trying to produce a TikTok hit, and lacked the reliability and lyricism. \\\\r\\\\n\\\\r\\\\nIn conclusion, while “Lonely Dancers” brought a unique and nuanced approach to Gray’s discography and sound, it fell short regarding lyrics, personality and relatability. However, I do hope the rest of the album presents a more “Midnights” approach with a balance between strong lyricism and upbeat sounds, something one could actually dance to while trying to hold back an extra tears.', 'conan.jpeg', 'celebrities', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jutarnji`
--
ALTER TABLE `jutarnji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jutarnji`
--
ALTER TABLE `jutarnji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
