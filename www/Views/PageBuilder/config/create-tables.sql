CREATE TABLE IF NOT EXISTS pages (
                                     id SERIAL PRIMARY KEY,
                                     name VARCHAR(255) NOT NULL,
    layout VARCHAR(255) NOT NULL,
    data TEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

CREATE TABLE IF NOT EXISTS page_translations (
                                                 id SERIAL PRIMARY KEY,
                                                 page_id INTEGER NOT NULL,
                                                 locale VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    meta_title VARCHAR(255) NOT NULL,
    meta_description VARCHAR(255) NOT NULL,
    route VARCHAR(255) NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (page_id, locale),
    FOREIGN KEY (page_id) REFERENCES pages (id) ON DELETE CASCADE ON UPDATE CASCADE
    );

CREATE TABLE IF NOT EXISTS uploads (
                                       id SERIAL PRIMARY KEY,
                                       public_id VARCHAR(50) NOT NULL,
    original_file VARCHAR(512) NOT NULL,
    mime_type VARCHAR(50) NOT NULL,
    server_file VARCHAR(512) NOT NULL,
    UNIQUE (public_id),
    UNIQUE (server_file)
    );

CREATE TABLE IF NOT EXISTS settings (
                                        id SERIAL PRIMARY KEY,
                                        setting VARCHAR(50) NOT NULL,
    value TEXT NOT NULL,
    is_array SMALLINT NOT NULL,
    UNIQUE (setting)
    );
