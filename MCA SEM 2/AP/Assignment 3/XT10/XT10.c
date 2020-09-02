#include<stdio.h>
#include<conio.h>
#include<stdlib.h>

// Structure Declaration
struct node{
    int data;
    struct node *next;
};


// Functions Declaration
void menu( struct node *, struct node * );
int ask_selection();
struct node * get_linklist( struct node *, struct node * );
int get_input();
void display_splitted_linklist( struct node *, struct node * );
void split( struct node *, struct node **, struct node **, int );
void display_linklist(struct node *);


// Main Function 
void main()
{
    struct node *new,*head = NULL;
    menu(new,head);
}


// Menu Function
void menu(struct node *new,struct node *head)
{
    int selection = ask_selection();
    switch (selection)
    {
    case(1):
        head = get_linklist(new,head);
        menu(new,head);
    case(2): 
        display_splitted_linklist(new,head);
        menu(new,head);
    case(3):
        display_linklist(head);
        menu(new,head);    
    default:
        exit(0);
    }
}


// ask_selection Function
int ask_selection()
{
    int n;
    printf("\n 1 . Input Data To Link-List. \n 2 . Split Link-List into Two. \n 3 . Display The Link List. \n 4 . Exit. \n");
    scanf(" %d",&n);
    if( n > 0 && n < 5 )
    {
        return n;
    }
    else{
        printf("\n Wrong Selection Please Choose Correct Options. \n");
        ask_selection();
    }
}


// getting elements to linklist with reverse functionality Function
struct node * get_linklist( struct node *new, struct node *head )
{
    int i,input = get_input();
    new = (struct node *)malloc(sizeof(struct node));  
    new->data = input;
    new->next = head;
    head = new;
    return head;
}


// Function for getting input from user 
int get_input()
{
    int in;
    printf("\n Enter The Number : ");
    scanf("%d",&in);
    return in;
}


// Function to add element of the linklist
void display_splitted_linklist( struct node *new, struct node *head )
{
    struct node *temp, *splithead1 = NULL, *splithead2 = NULL;
    temp = head;
    int count = 0,split_1 = 0,split_2 = 0;
    while( temp != NULL )
    {
        count++;
        temp = temp->next;
    }
    if( count < 2 )
    {
        printf(" No Need To split Link-List, Less Than 2 Elements or Empty.");
    }
    else{
        temp = head;
        split_1 = count/2;
        split_2 = count - split_1;
        split( new,&splithead1,&temp,split_1 );
        split( new,&splithead2,&temp,split_2 );
        display_linklist(splithead1);
        display_linklist(splithead2);
    }
    
}


void split( struct node *new, struct node **splithead, struct node **temp, int limit )
{
    struct node *splittertemp,*temp2;
    temp2 = *temp;
    while( limit > 0 )
        {
            new = (struct node *)malloc(sizeof(struct node));
            if( *splithead == NULL )
            {
                *splithead = new;
                splittertemp = *splithead;
            }
            splittertemp->next = new;
            new->data = temp2->data;
            new->next = NULL;
            splittertemp = new;
            temp2 = temp2->next;
            --limit;
        }
        *temp = temp2;
}


// Funtion Display will show all elements in linklist
void display_linklist(struct node *head)
{
    struct node *temp;
    if(head == NULL)
    {
        printf("\nThere Is Nothing To Display.\n");
    }
    else
    {
        temp = head;
        printf("\nThe List is : \n");
        while(temp->next != NULL)
        {
            printf(" %d => ",temp->data);
            temp = temp->next;
        }
        printf(" %d \n",temp->data);
    }
}