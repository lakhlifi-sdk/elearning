import subprocess


def run(*args):
    return subprocess.check_call(['git'] + list(args))

def status():
    print("\n====================================================================\n")
    print("                              git status                            ")
    print("\n====================================================================\n")

    run("status")

def add():
    print("\n====================================================================\n")
    print("                              git add .                            ")
    print("\n====================================================================\n")

    run("add", ".")

def commit():
    print("\n====================================================================\n")
    print("                              git commit                            ")
    print("\n====================================================================\n")
    message = input("\nType in your commit message: ")
    commit_message = f"{message}"

    run("commit", "-m", commit_message)

def push():
    print("\n====================================================================\n")
    print("                              git push                            ")
    print("\n====================================================================\n")
    run("push", "-u", "origin", "master")


def main():
    print("\n====================================================================\n")
    print("                              welcome team :)                           ")
    print("\n====================================================================\n")

    status()

    inp = input("Do you want add this files ? [ Tape : yes or no ]").lower()
    if( inp == "yes" ):
        add()
        commit()
        push()
    
    print("\n====================================================================\n")
    print("                              good bye ;D                            ")
    print("\n====================================================================\n")


main()
