#include<stdio.h>
#include<conio.h>
#include<stdlib.h>


struct node{
    int data;
    struct node *next;
};


void menu( struct node *, struct node *, struct node *, struct node * );
int ask_selection();
struct node * get_linklist( struct node *new, struct node *head );
int get_input();
void display_linklist( struct node *, struct node * );
void append_link_list( struct node *, struct node * );


void main()
{
    struct node *list1,*list2,*head1 = NULL,*head2 = NULL;
    menu(list1,list2,head1,head2);
}


void menu( struct node *list1, struct node *list2, struct node *head1, struct node *head2 )
{
    int selection = ask_selection();
    switch (selection)
    {
    case(1):
        head1 = get_linklist(list1,head1);
        menu(list1,list2,head1,head2);
    case(2): 
        head2 = get_linklist(list2,head2);
        menu(list1,list2,head1,head2);
    case(3):
        display_linklist(head1,head2);
        menu(list1,list2,head1,head2);
    case(4):
        append_link_list(head1,head2);
        menu(list1,list2,head1,head2);    
    default:
        exit(0);
    }
}


int ask_selection()
{
    int n;
    printf("\n 1 . Input Data To First Link-List. \n 2 . Input Data To Second Link-List.  \n 3 . Display The Elements from Both Link List. \n 4 . Append The Second Link List into First Link List. \n 5 . Exit. \n");
    scanf("%d",&n);
    if( n > 0 && n < 6 )
    {
        return n;
    }
    else{
        printf("\n Wrong Selection Please Choose Correct Options. \n");
        ask_selection();
    }
}



struct node * get_linklist( struct node *new, struct node *head )
{
    int i,input = get_input();
    struct node *temp;
    new = (struct node *)malloc(sizeof(struct node));
    if( head == NULL )
    {
        head = new;
        new->data = input;
        new->next = NULL;
    }
    else{
        temp = head;
        while( temp->next != NULL )
        {
            temp = temp->next;
        }
        temp->next = new;
        new->data = input;
        new->next = NULL;
    } 
    return head;
}



int get_input()
{
    int in;
    printf("\n Enter The Number : ");
    scanf("%d",&in);
    return in;
}



void display_linklist(struct node *head1, struct node *head2 )
{
    struct node *temp;
    if(head1 == NULL)
    {
        printf("\nFirst Link List : NULL\n");
    }
    else
    {
        temp = head1;
        printf("\nFirst Link List : ");
        while(temp->next != NULL)
        {
            printf(" %d => ",temp->data);
            temp = temp->next;
        }
        printf(" %d \n",temp->data);
    }

    if(head2 == NULL)
    {
        printf("\nSecond Link List : NULL\n");
    }
    else
    {
        temp = head2;
        printf("\nSecond Link List : ");
        while(temp->next != NULL)
        {
            printf(" %d => ",temp->data);
            temp = temp->next;
        }
        printf(" %d \n",temp->data);
    }
}



void append_link_list( struct node *head1, struct node *head2 )
{
    struct node *temp_head1,*temp_head2,*prev = NULL;
    if( head2 == NULL )
    {
        printf("\n Nothing To Append. \n");
    }
    else{
        temp_head1 = head1;
        temp_head2 = head2;

        while( temp_head1->next != NULL)
        {
            temp_head1 = temp_head1->next;
        }
        temp_head1->next = temp_head2;
    }
}