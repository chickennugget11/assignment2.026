# used to generate test data
from random import randint, choice
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
	return random_string(1, 20)  + "@" + random_string(1, 5) + "." + random_string(1, 3)

def random_number(a: int, b: int) -> str:
    length = randint(a, b)
    s: str = ""
    for _ in range(length):
        s += str(randint(0, 9))
    return s

def random_bool() -> int:
    return int(randint(1, 100) % 2 == 0)

test_file = open("test_sql.txt", "w")

for _ in range(rows):
	test_file.write(
		f"""
		INSERT INTO `eoi` (job_ref, fname, lname, street, suburbtown, state, post, email, num, html, css, js, php, mysql, other_skills, status)
		VALUES (
			"JOB0{randint(1, 9)}",
			"{random_string(1, 20)}", 
			"{random_string(1, 20)}",
			"{random_string(0, 40)}",
   			"{random_string(0, 40)}",
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