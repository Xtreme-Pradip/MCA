#include<stdio.h>
#include<conio.h>

void getstring(char *);
char getchart();
void deleting(char *,char);

void main()
{
    char str[10], delete, *strptr;
    strptr = str;
    getstring(strptr);
    delete = getchart();
    deleting(strptr,delete);
}

void getstring(char *s)
{
    printf( "Enter The String : " );
    scanf("%s",s);
}

char getchart()
{
    char d;
    printf( "Enter The Deletion Character : " );
    scanf(" %c",&d);
    return d;
}

void deleting(char *s,char d)
{
    printf("\n%s",s);
    printf("\n%c",d);
    char *trap,*store;
    store = s;
    while( *s != '\0' )
    {
        if( *s == d || *s == d - 32 || *s == d + 32 )
        {
            trap = s;
            while( *trap != '\0' )
            {
                *trap = *(trap + 1);
                trap++; 
            }
        }
        s++;
    }
    s = store;
    printf("\n%s",s);
}