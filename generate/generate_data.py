# used to generate test data
from random import randint, choice
import pandas as pd

names_df = pd.read_csv("./common-forenames-by-country.csv")
names = names_df["Romanized Name"].to_list()

cities_df = pd.read_csv("./worldcities.csv")
cities = cities_df["city_ascii"].to_list()

providers = [i.strip("\n") for i in open("email_providers.txt", "r").readlines()]

rows: int = 100



chars = []
for i in range(ord('A'), ord('Z') + 1):
	chars.append(chr(i))
	chars.append(chr(i).lower())

def random_string(a: int, b: int) -> str:
	length = randint(a, b)
	s: str = ""
	for _ in range(length):
		s += choice(chars)
	return s


def random_state() -> str:
	return choice(["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"])
	
def random_post(length: int) -> str:
	s = ""
	for _ in range(length):
		s += str(randint(0, 9))
	return s

def random_email() -> str:
	return choice(names) + "_" + choice(names)  + "@" +  choice(providers)

def random_number(a: int, b: int) -> str:
    length = randint(a, b)
    s: str = ""
    for _ in range(length):
        s += str(randint(0, 9))
    return s

def random_bool() -> int:
    return int(randint(1, 100) % 2 == 0)

test_file = open("test_sql.txt", "w", encoding="utf-8")

for _ in range(rows):
	test_file.write(
		f"""
		INSERT INTO `eoi` (job_ref, fname, lname, street, suburbtown, state, post, email, num, html, css, js, php, mysql, other_skills, status)
		VALUES (
			"JOB0{randint(1, 9)}",
			"{choice(names)}", 
			"{choice(names)}",
			"{choice(cities)}",
   			"{choice(cities)}",
			"{random_state()}",
   			"{random_post(4)}",
      		"{random_email()}",
	  		"{random_number(8, 12)}",
     		"{random_bool()}",
       		"{random_bool()}",
       		"{random_bool()}",
       		"{random_bool()}",
	   		"{random_bool()}",
			"{random_string(0, 100)}",
   			"New"
		);
		""".replace("\n", " ").replace("\t", " ") + "\n"
	)