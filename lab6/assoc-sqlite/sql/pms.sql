/* Prime Ministers database in MySQL. */

create table if not exists pms (
  id int not null auto_increment primary key,
  number int, /* 0 = subsequent term */
  name varchar(40) not null,
  start varchar(40) not null,
  finish varchar(40) not null,
  party varchar(40),
  duration varchar(40),
  state varchar(40)
);

/* Column names changed to avoid MySQL reserved words. */

insert into pms(number, name, start, finish, party, duration, state)
values
(1, 'Edmund Barton', '1 January 1901', '24 September 1903', 'Protectionist', '2 years, 8 months, 24 days', 'New South Wales'),
(2, 'Alfred Deakin', '24 September 1903', '27 April 1904', 'Protectionist', '0 years, 7 months, 4 days', 'Victoria'),
(3, 'Chris Watson', '27 April 1904', '18 August 1904', 'Labour', '0 years, 3 months, 21 days', 'New South Wales'),
(4, 'George Reid', '18 August 1904', '5 July 1905', 'Free Trade', '0 years, 10 months, 18 days', 'New South Wales'),
(0, 'Alfred Deakin', '5 July 1905', '13 November 1908', 'Protectionist', '3 years, 4 months, 9 days', 'Victoria'),
(5, 'Andrew Fisher', '13 November 1908', '2 June 1909', 'Labour', '0 years, 6 months, 21 days', 'Queensland'),
(0, 'Alfred Deakin', '2 June 1909', '29 April 1910', 'Commonwealth Liberal', '0 years, 10 months, 28 days', 'Victoria'),
(0, 'Andrew Fisher', '29 April 1910', '24 June 1913', 'Labor', '3 years, 1 month, 26 days', 'Queensland'),
(6, 'Joseph Cook', '24 June 1913', '17 September 1914', 'Commonwealth Liberal', '1 year, 2 months, 25 days', 'New South Wales'),
(0, 'Andrew Fisher', '17 September 1914', '27 October 1915', 'Labor', '1 year, 1 month, 11 days', 'Queensland'),
(7, 'Billy Hughes', '27 October 1915', '9 February 1923', 'Labor/Nationalist', '7 years, 3 months, 14 days', 'New South Wales, Victoria'),
(8, 'Stanley Bruce', '9 February 1923', '22 October 1929', 'Nationalist', '6 years, 8 months, 14 days', 'Victoria'),
(9, 'James Scullin', '22 October 1929', '6 January 1932', 'Labor', '2 years, 2 months, 16 days', 'Victoria'),
(10, 'Joseph Lyons', '6 January 1932', '7 April 1939', 'United Australia', '7 years, 3 months, 2 days', 'Tasmania'),
(11, 'Earle Page', '7 April 1939', '26 April 1939', 'Country', '0 years, 0 months, 20 days', 'New South Wales'),
(12, 'Robert Menzies', '26 April 1939', '28 August 1941', 'United Australia', '2 years, 4 months, 4 days', 'Victoria'),
(13, 'Arthur Fadden', '28 August 1941', '7 October 1941', 'Country', '0 years, 1 month, 9 days', 'Queensland'),
(14, 'John Curtin', '7 October 1941', '5 July 1945', 'Labor', '3 years, 8 months, 29 days', 'Western Australia'),
(15, 'Frank Forde', '6 July 1945', '13 July 1945', 'Labor', '0 years, 0 months, 8 days', 'Queensland'),
(16, 'Ben Chifley', '13 July 1945', '19 December 1949', 'Labor', '4 years, 5 months, 7 days', 'New South Wales'),
(0, 'Robert Menzies', '19 December 1949', '26 January 1966', 'Liberal', '16 years, 1 month, 8 days', 'Victoria'),
(17, 'Harold Holt', '26 January 1966', '19 December 1967[5]', 'Liberal', '1 year, 10 months, 23 days', 'Victoria'),
(18, 'John McEwen', '19 December 1967', '10 January 1968', 'Country', '0 years, 0 months, 23 days', 'Victoria'),
(19, 'John Gorton', '10 January 1968', '10 March 1971', 'Liberal', '3 years, 2 months, 0 days', 'Victoria'),
(20, 'William McMahon', '10 March 1971', '5 December 1972', 'Liberal', '1 year, 8 months, 25 days', 'New South Wales'),
(21, 'Gough Whitlam', '5 December 1972', '11 November 1975', 'Labor', '2 years, 11 months, 7 days', 'New South Wales'),
(22, 'Malcolm Fraser', '11 November 1975', '11 March 1983', 'Liberal', '7 years, 4 months, 0 days', 'Victoria'),
(23, 'Bob Hawke', '11 March 1983', '20 December 1991', 'Labor', '8 years, 9 months, 10 days', 'Victoria'),
(24, 'Paul Keating', '20 December 1991', '11 March 1996', 'Labor', '4 years, 2 months, 20 days', 'New South Wales'),
(25, 'John Howard', '11 March 1996', '3 December 2007', 'Liberal', '11 years, 8 months, 23 days', 'New South Wales'),
(26, 'Kevin Rudd', '3 December 2007', '24 June 2010', 'Labor', '2 years, 6 months, 21 days', ' Queensland'),
(27, 'Julia Gillard', '24 June 2010', 'Incumbent', 'Labor', '2 years, 9 months, 1 day', ' Victoria');

/* Sample query to test insertion worked. */

select * from pms
where state like "%queensland%"
order by id;
