-- convert Laravel migrations to raw SQL scripts --

-- migration:2014_10_12_000000_create_users_table --
create table `users` (
  `id` bigint unsigned not null auto_increment primary key, 
  `name` varchar(255) not null, 
  `email` varchar(255) not null, 
  `email_verified_at` timestamp null, 
  `is_admin` tinyint(1) null, 
  `password` varchar(255) not null, 
  `remember_token` varchar(100) null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8mb4 collate 'utf8mb4_unicode_ci';
alter table 
  `users` 
add 
  unique `users_email_unique`(`email`);

-- migration:2014_10_12_100000_create_password_resets_table --
create table `password_resets` (
  `email` varchar(255) not null, 
  `token` varchar(255) not null, 
  `created_at` timestamp null
) default character set utf8mb4 collate 'utf8mb4_unicode_ci';
alter table 
  `password_resets` 
add 
  index `password_resets_email_index`(`email`);

-- migration:2019_08_19_000000_create_failed_jobs_table --
create table `failed_jobs` (
  `id` bigint unsigned not null auto_increment primary key, 
  `uuid` varchar(255) not null, 
  `connection` text not null, 
  `queue` text not null, 
  `payload` longtext not null, 
  `exception` longtext not null, 
  `failed_at` timestamp default CURRENT_TIMESTAMP not null
) default character set utf8mb4 collate 'utf8mb4_unicode_ci';
alter table 
  `failed_jobs` 
add 
  unique `failed_jobs_uuid_unique`(`uuid`);

-- migration:2019_12_14_000001_create_personal_access_tokens_table --
create table `personal_access_tokens` (
  `id` bigint unsigned not null auto_increment primary key, 
  `tokenable_type` varchar(255) not null, 
  `tokenable_id` bigint unsigned not null, 
  `name` varchar(255) not null, 
  `token` varchar(64) not null, 
  `abilities` text null, 
  `last_used_at` timestamp null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8mb4 collate 'utf8mb4_unicode_ci';
alter table 
  `personal_access_tokens` 
add 
  index `personal_access_tokens_tokenable_type_tokenable_id_index`(
    `tokenable_type`, `tokenable_id`
  );
alter table 
  `personal_access_tokens` 
add 
  unique `personal_access_tokens_token_unique`(`token`);

-- migration:2022_05_31_085848_create_pendaftarans_table --
create table `pendaftarans` (
  `id` bigint unsigned not null auto_increment primary key, 
  `nama_lengkap` varchar(255) null, 
  `nim` int null, 
  `jenis_kelamin` enum('laki-laki', 'perempuan') null, 
  `jurusan` varchar(255) null, 
  `nomor_hp` varchar(255) null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8mb4 collate 'utf8mb4_unicode_ci';
